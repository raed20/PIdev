<?php
namespace App\Service;
use Stripe\PaymentIntent;

use Stripe\Stripe;
use Stripe\Checkout\Session;
use Symfony\Component\HttpFoundation\Response;
use Stripe\Exception\SignatureVerificationException;
use Stripe\WebhookSignature;
use Symfony\Component\HttpFoundation\Request;
use Stripe\Invoice;


class StripeService
{
    private $stripeSecretKey;
    private $webhookSigningSecret;
    private $mailer;


    public function __construct(string $stripeSecretKey,string $webhookSigningSecret)
    {
        $this->stripeSecretKey = $stripeSecretKey;
        Stripe::setApiKey($this->stripeSecretKey);
        $this->webhookSigningSecret = $webhookSigningSecret;

    }

    public function getWebhookSecret(): string
{
    return $_ENV['STRIPE_WEBHOOK_SECRET']; // Fetch from environment variable
}
    

    public function createPaymentSession(string $productName, int $amount): Session
    {
        return Session::create([
            'mode' => 'payment',
            'invoice_creation' => ['enabled' => true],
            'payment_method_types' => ['card'],
            'line_items' => [[
                'price_data' => [
                    'currency' => 'usd',
                    'product_data' => [
                        'name' => $productName,
                    ],
                    'unit_amount' => $amount,
                ],
                'quantity' => 1,
            ]],
            'success_url' => 'http://127.0.0.1:8000/AfficherWalett',
            'cancel_url' => 'https://2b25-197-0-30-61.ngrok-free.app/test',
            'billing_address_collection' => 'required', // Require billing address for invoice
            'payment_intent_data' => [
                'capture_method' => 'automatic', // Ensure capture method is automatic
            ],
        ]);
    }

    public function createInvoice(string $customerId, string $paymentIntentId): Invoice
    {
        return Invoice::create([
            'customer' => $customerId,
            'payment_intent' => $paymentIntentId,
            'auto_advance' => true, // Automatically send the invoice after successful payment
            // Add more invoice details as needed
        ]);
    }
    public function verifyWebhookSignature(Request $request): void
    {
        $payload = $request->getContent();
        $sigHeader = $request->headers->get('Stripe-Signature');

        try {
            WebhookSignature::verifyHeader($payload, $sigHeader, $this->webhookSigningSecret);
        } catch (SignatureVerificationException $e) {
            // Handle invalid signature
            throw new \InvalidArgumentException('Invalid Stripe webhook signature');
        }
    }

}
