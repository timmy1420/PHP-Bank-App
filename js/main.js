var cashiers = {
    coins: function() {
        $('#form_coins').submit(function(e) {
            e.preventDefault();

            let cent5 = $('#cent5').val() * 0.05,
                cent10 = $('#cent10').val() * 0.1,
                cent25 = $('#cent25').val() * 0.25,
                cent100 = $('#cent100').val() * 1,
                cent250 = $('#cent250').val() * 2.50,
                srd5 = $('#srd5').val() * 5,
                srd10 = $('#srd10').val() * 10,
                srd20 = $('#srd20').val() * 20,
                srd50 = $('#srd50').val() * 50,
                srd100 = $('#srd100').val() * 100;
            
            let total = app.count(cent5, cent10, cent25, cent100, cent250, srd5, srd10, srd20, srd50, srd100);
            $('#amount').html(total);
        });
    },
    withdrawal: function() {
        $('#calculate').click(function() {
            $('[name="register"]').removeAttr('disabled');

            let cent5 = $('#cent5').val() * 0.05,
                cent10 = $('#cent10').val() * 0.1,
                cent25 = $('#cent25').val() * 0.25,
                cent100 = $('#cent100').val() * 1,
                cent250 = $('#cent250').val() * 2.50,
                srd5 = $('#srd5').val() * 5,
                srd10 = $('#srd10').val() * 10,
                srd20 = $('#srd20').val() * 20,
                srd50 = $('#srd50').val() * 50,
                srd100 = $('#srd100').val() * 100;
            
            let total = app.count(cent5, cent10, cent25, cent100, cent250, srd5, srd10, srd20, srd50, srd100);
            $('#amount').html(total);
        });
    },
    deposit: function() {
        $('#calculate').click(function() {
            $('[name="register"]').removeAttr('disabled');

            let cent5 = $('#cent5').val() * 0.05,
                cent10 = $('#cent10').val() * 0.1,
                cent25 = $('#cent25').val() * 0.25,
                cent100 = $('#cent100').val() * 1,
                cent250 = $('#cent250').val() * 2.50,
                srd5 = $('#srd5').val() * 5,
                srd10 = $('#srd10').val() * 10,
                srd20 = $('#srd20').val() * 20,
                srd50 = $('#srd50').val() * 50,
                srd100 = $('#srd100').val() * 100;
            
            let total = app.count(cent5, cent10, cent25, cent100, cent250, srd5, srd10, srd20, srd50, srd100);
            $('#amount').html(total);
        });
    }
};

var app = {
    count: function(cent5, cent10, cent25, cent100, cent250, srd5, srd10, srd20, srd50, srd100) {
        let total = cent5 + cent10 + cent25 + cent100 + cent250 + srd5 + srd10 + srd20 + srd50 + srd100;
        return total.toFixed(2);
        
    },
    back: function() {
        window.history.back(-1);
    }
}

