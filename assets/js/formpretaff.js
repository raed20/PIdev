// Données de statistiques pour chaque banque
var bankStats = {
    bank1: {
        clients: 1000,
        loansApproved: 800,
        averageInterestRate: 5.2
    },
    bank2: {
        clients: 1500,
        loansApproved: 1200,
        averageInterestRate: 5.8
    },
    bank3: {
        clients: 800,
        loansApproved: 600,
        averageInterestRate: 5.0
    }
};





// Fonction pour mettre à jour les statistiques du tableau de bord
function updateDashboard(bank) {
    var stats = bankStats[bank];
    var dashboardElement = document.getElementById('bank-stats');
    dashboardElement.innerHTML = `
        <h3 >Statistiques Banques ${bank.substring(4)}</h3>
        <p>Clients: ${stats.clients}</p>
        <p>Prêts approuvés: ${stats.loansApproved}</p>
        <p>Taux d'intérêt moyen: ${stats.averageInterestRate}%</p>
    `;
}



// Écouteur d'événement pour le changement de sélection de la banque
document.getElementById('bank-select').addEventListener('change', function() {
    var selectedBank = this.value;
    updateDashboard(selectedBank);
});

document.addEventListener('DOMContentLoaded', function() {
    const bankSelect = document.getElementById('bank-select');
    const modal = document.getElementById('loan-form-modal');
    const closeBtn = document.getElementsByClassName('close')[0];

    bankSelect.addEventListener('change', function() {
        if (bankSelect.value !== '') {
            modal.style.display = 'block';
        } else {
            modal.style.display = 'none';
        }
    });

    closeBtn.onclick = function() {
        modal.style.display = 'none';
    }

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = 'none';
        }
    };


});
