<script>
    const userAccounts = JSON.parse('{!! $accounts !!}')
    let activeCurrency = 'BTC';

    const percents = JSON.parse('{!! json_encode($percent) !!}');
    let time_frame = $('input#time_frame_input').val();

    let percent = percents[time_frame];

    let yearlyIncome = parseFloat(percent) / 100 * 364;
    let mounthlyIncome = parseFloat(percent) / 100 * 30;
    let daylyIncome = parseFloat(percent) / 100;

    const rates = JSON.parse('{!! json_encode($rates) !!}')

    let investAmount = 0;
    rate = 1;
    let ccc = {};
    for (const rate1 of rates) {
        ccc[rate1[0]] = rate1
    }
    ccc.USDT = ['USDT', 1];

    function sch() {
        cid = $('#PSys').val();
        if (cid === "RUB") {
            $('#payment-blockchain').parent().hide()
            $('#payment-balance').prop('checked', true)
        } else {
            $('#payment-blockchain').parent().show()
        }
        activeCurrency = ccc[cid][0];
        // $('.profit-calculate-box p').attr('data-currency', activeCurrency)
        recalcProfitBoxes()
        recalcBalance()
        //$('#currency-balance').text(userAccounts.find(i=>i.currency === activeCurrency.toLowerCase()+'_one').balance)
        curr = ccc[cid][0];
        rate = ccc[cid][1];
        $('#curr').html(curr);
        $('#calc1curr').html(curr);
        $('#calc2curr').html(curr);
        $('#calc3curr').html(curr);
        recalc();
    }

    sch();
    $('#PSys').change(sch);
    setInterval(sch, 250);

    function recalc() {
        z = 1 * $('#Sum').val();
        cid = $('#PSys').val();
        $('#calc1').html(1 * ((z * 2 / 100).toFixed(6)));
        $('#calc2').html(1 * ((z * 60 / 100).toFixed(6)));
        $('#calc3').html(1 * ((z * 730 / 100).toFixed(6)));
    }

    const buttonsUpdate = (e) => {
        e.preventDefault()
        $('.amount-helper__btn').removeClass('active')
        investAmount = $(e.target).attr('data-amount')
        $(e.target).addClass('active')
        recalcProfitBoxes()


        $('#amount-input').val(investAmount)
        $('#amount-input').attr('data-amount', investAmount)
        $('#amount-input').trigger('change')
        // $('.profit-calculate-box p').attr('data-currency', activeCurrency)
    }

    $('#Sum').on('change', recalc);
    $('#amount-input').on('change', (e) => {
        investAmount = parseInt(e.target.value)
        e.target.dataset.amount = e.target.value
        recalcProfitBoxes()

        $('.amount-helper__btn').removeClass('active')
        $('.amount-helper__btn').each(function() {
            if ($(this).attr('data-amount') == investAmount) {
                $(this).addClass('active')
            }
        })
        $(`input[name="amount"]`).val(e.target.value / ccc[activeCurrency][1])
    })
    $(`input[name="amount"]`).on('change', (e) => {
        investAmount = parseFloat(e.target.value) * ccc[activeCurrency][1]
        recalcProfitBoxes()

        $('.amount-helper__btn').removeClass('active')
        $('.amount-helper__btn').each(function() {
            if ($(this).attr('data-amount') == investAmount / ccc[activeCurrency][1]) {
                $(this).addClass('active')
            }
        })
        //$(`input[name="amount"]`).val(e.target.value / ccc[activeCurrency][1])
    })
    $('.amount-helper__btn').click(buttonsUpdate)

    $('.time-helper__btn').click(e => {
        e.preventDefault()
        $('.time-helper__btn').removeClass('active')
        time_frame = parseInt($(e.target).attr('data-time'))
        $('input#time_frame_input').attr('value', time_frame)
        percent = percents[time_frame]
        recalcProfitBoxes();

        $(e.target).addClass('active')
    })

    function recalcProfitBoxes() {
        let curId = $('#PSys').val();

        yearlyIncome = parseFloat(percent) / 100 * 364;
        mounthlyIncome = parseFloat(percent) / 100 * 30;
        daylyIncome = parseFloat(percent) / 100;
        

        
        let dayProf = (investAmount * daylyIncome) / ccc['APY'][1];
        let mounthProf = (investAmount * mounthlyIncome) / ccc['APY'][1];
        let yearProf = (investAmount * yearlyIncome) / ccc['APY'][1];

        $('.choose-helper__btn')
        $('.profit-calculate-box p[data-timeframe="d"]').text(activeCurrency.includes('USD') ? dayProf.toFixed(2) : dayProf.toFixed(6))
        $('.profit-calculate-box p[data-timeframe="m"]').text(activeCurrency.includes('USD') ? mounthProf.toFixed(2) : mounthProf.toFixed(6))
        $('.profit-calculate-box p[data-timeframe="y"]').text(activeCurrency.includes('USD') ? yearProf.toFixed(2) : yearProf.toFixed(6))

    }

    function recalcBalance() {
        userAccounts.forEach(i => {
            if (i.currency === activeCurrency) {
                $('#currency-balance').text(`${i.balance / 100000}  ${i.currency}`)
            }
        })
    }
    
</script>;