$(window).ready(function() {
    $('.career_characteristics').hide();
    $('.roll_characteristics').hide();
    Page();
    Race();
    Category();
    CheckImp();
    Roll();
    Random();
    Destiny();
    Resilience();
});

function Page()
{
    $('.page-2').toggle();
    $('.next').click(function(){
        $('.page-1').toggle();
        $('.page-2').toggle();
    });
}

function Race()
{
    $('select[name="races"]').on('change', function() {
       // $('input[name="category"]').remove();
       // $('select[name="category"]').remove();
        $.ajax({
            url: 'new-swap-race',
            method: 'POST',
            data: { id_race: $('select[name="races"]').val() },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {
                $.each(response.race.characteristics, function(index, race_characteristic) {
                    $('input[name="' + race_characteristic.abbreviation.toLowerCase() + '_ini"]').val(race_characteristic.pivot.value);
                });
                $('input[name="destiny"]').val(response.race.destiny);
                $('input[name="fortune"]').val(response.race.destiny);
                $('input[name="resilience"]').val(response.race.resilience);
                $('input[name="resolution"]').val(response.race.resilience);
                $('input[name="motivation"]').val(response.race.resilience);
                $('.extra_points').html(response.race.extra);
                $('.extra_points').attr('data-points', response.race.extra);
                $('.extra_points').attr('data-wasted-points', 0);
                $('input[name="movement"]').val(response.race.movement);
                $('input[name="walk"]').val(response.race.movement * 2);
                $('input[name="run"]').val(response.race.movement * 4);
                Total();
            },
            error: function(xhr, status, error) {
                console.error(textStatus, errorThrown);
            }
        });
    });
}

function Category()
{
    $('select[name="category"]').on('change', function() {
        $('input[name="profession"]').remove();
        $('select[name="profession"]').remove();
        if( $('select[name="category"]').val() == 0)
        {
            var input = $('<input>').attr({
                type: 'text',
                name: 'profession',
                disabled: true
            }).val('Selecciona clase');
        
            $('.sheet-1').append(input);
        }
        else
        {
            $.ajax({
                url: 'new-swap-class',
                type: "POST",
                data: { id_race: $('select[name="races"]').val(), id_category: $('select[name="category"]').val() },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    if(Object.keys(response).length > 0)
                    {    
                        var select = $('<select>');
                        select.append($('<option>', {
                            value: 0,
                            text: '- Profesión -'
                        }));
                        $.each(response, function(index, value) {
                            select.append($('<option>', {
                                value: value.id_profession,
                                text: value.name
                            }));
                        });
                        select.attr('name', 'profession');
                        $('.sheet-1').append(select);
                        Profession();
                    }
                    else
                    {
                        var input = $('<input>').attr({
                            type: 'text',
                            name: 'profession',
                            disabled: true
                        }).val('Profesión sin clases');

                        $('.shee-1').append(input);
                    }
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.error(textStatus, errorThrown);
                }
            });
        }
    });
}

function Profession()
{
    $('select[name="profession"]').on('change', function() {
        RestartProfession();
        if( $('select[name="profession"]').val() == 0)
        {
            var input = $('<input>').attr({
                type: 'text',
                name: 'status',
                disabled: true
            }).val('Selecciona profesión');
            $('.career_characteristics').hide();
            $('.roll_characteristics').hide();
            $('.page-1').append(input);
        }
        else
        {
            $.ajax({
                url: 'new-swap-profession',
                method: "POST",
                data: { 'id_profession': $('select[name="profession"]').val() },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    if(Object.keys(response).length > 0)
                    {    
                        $('input[name="status"]').val(response.career_path[0].status_range + ' ' + response.career_path[0].status_level);
                        $.each(response.characteristic, function(index, characteristic) {
                            $.each(response.career_path_characteristic, function(index, career_path_characteristic) {
                                if(characteristic.id_characteristic == career_path_characteristic.id_characteristic) {
                                    $.each(response.career_path, function(index, career_path) {
                                        if(career_path_characteristic.id_career_path == career_path.id_career_path) {
                                            $('input[name="' + characteristic.abbreviation.toLowerCase() + '_imp"]').addClass('career-' + career_path.level);
                                        }
                                    });    
                                }
                            });
                        });
                    }
                    $('.career_characteristics').show();
                    $('.career_characteristics-1').html(response.career_path[0].name);
                    $('.career_characteristics-2').html(response.career_path[1].name);
                    $('.career_characteristics-3').html(response.career_path[2].name);
                    $('.career_characteristics-4').html(response.career_path[3].name);
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.error(textStatus, errorThrown);
                }
            });
        }
    });
}


function RestartProfession()
{ 
    $('input[name="ha_imp"]').removeClass('career-1 career-2 career-3 career-4');
    $('input[name="hp_imp"]').removeClass('career-1 career-2 career-3 career-4');
    $('input[name="f_imp"]').removeClass('career-1 career-2 career-3 career-4');
    $('input[name="r_imp"]').removeClass('career-1 career-2 career-3 career-4');
    $('input[name="ini_imp"]').removeClass('career-1 career-2 career-3 career-4');
    $('input[name="ag_imp"]').removeClass('career-1 career-2 career-3 career-4');
    $('input[name="des_imp"]').removeClass('career-1 career-2 career-3 career-4');
    $('input[name="i_imp"]').removeClass('career-1 career-2 career-3 career-4');
    $('input[name="v_imp"]').removeClass('career-1 career-2 career-3 career-4');
    $('input[name="em_imp"]').removeClass('career-1 career-2 career-3 career-4');
    $('.career_characteristics-1').html('');
    $('.career_characteristics-2').html('');
    $('.career_characteristics-3').html('');
    $('.career_characteristics-4').html('');
    $('input[name="status"]').val('');

}

function Total()
{
    var ha_imp = $('input[name="ha_imp"]').val();
    if(ha_imp == '') {
        ha_imp = 0;
    }
    var hp_imp = $('input[name="hp_imp"]').val();
    if(hp_imp == '') {
        hp_imp = 0;
    }
    var f_imp = $('input[name="f_imp"]').val();
    if(f_imp == '') {
        f_imp = 0;
    }
    var r_imp = $('input[name="r_imp"]').val();
    if(r_imp == '') {
        r_imp = 0;
    }
    var ini_imp = $('input[name="ini_imp"]').val();
    if(ini_imp == '') {
        ini_imp = 0;
    }
    var ag_imp = $('input[name="ag_imp"]').val();
    if(ag_imp == '') {
        ag_imp = 0;
    }
    var des_imp = $('input[name="des_imp"]').val();
    if(des_imp == '') {
        des_imp = 0;
    }
    var i_imp = $('input[name="i_imp"]').val();
    if(i_imp == '') {
        i_imp = 0;
    }
    var v_imp = $('input[name="v_imp"]').val();
    if(v_imp == '') {
        v_imp = 0;
    }
    var em_imp = $('input[name="em_imp"]').val();
    if(em_imp == '') {
        em_imp = 0;
    }
    $('input[name="ha_total"]').val(parseInt($('input[name="ha_ini"]').val()) + parseInt(ha_imp));
    $('input[name="hp_total"]').val(parseInt($('input[name="hp_ini"]').val()) + parseInt(hp_imp));
    $('input[name="f_total"]').val(parseInt($('input[name="f_ini"]').val()) + parseInt(f_imp));
    $('input[name="r_total"]').val(parseInt($('input[name="r_ini"]').val()) + parseInt(r_imp));
    $('input[name="ini_total"]').val(parseInt($('input[name="ini_ini"]').val()) + parseInt(ini_imp));
    $('input[name="ag_total"]').val(parseInt($('input[name="ag_ini"]').val()) + parseInt(ag_imp));
    $('input[name="des_total"]').val(parseInt($('input[name="des_ini"]').val()) + parseInt(des_imp));
    $('input[name="i_total"]').val(parseInt($('input[name="i_ini"]').val()) + parseInt(i_imp));
    $('input[name="v_total"]').val(parseInt($('input[name="v_ini"]').val()) + parseInt(v_imp));
    $('input[name="em_total"]').val(parseInt($('input[name="em_ini"]').val()) + parseInt(em_imp));
}

function CheckImp()
{
    $('input[name="ha_imp"], input[name="hp_imp"], input[name="f_imp"], input[name="r_imp"], input[name="i_imp"], input[name="ag_imp"], input[name="des_imp"], input[name="int_imp"], input[name="v_imp"], input[name="em_imp"]').on('input', function() {
        var value = $(this).val();
        if (value !== '' && (isNaN(value) || value < 1 || value > 20)) {
            $(this).val(value.slice(0, -1));
        }
        Total();
    });
}

function Roll()
{
    $('.random_roll button').on('click', function(){
        $.ajax({
            url: "new-random-roll",
            method: "POST",
            dataType: "json",
            data: {},
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {
                $('.roll_characteristics').show();
                $('.roll_characteristics .roll_ha').html(response.ha);
                $('.roll_characteristics .roll_hp').html(response.hp);
                $('.roll_characteristics .roll_f').html(response.f);
                $('.roll_characteristics .roll_r').html(response.r);
                $('.roll_characteristics .roll_ini').html(response.ini);
                $('.roll_characteristics .roll_ag').html(response.ag);
                $('.roll_characteristics .roll_des').html(response.des);
                $('.roll_characteristics .roll_i').html(response.i);
                $('.roll_characteristics .roll_v').html(response.v);
                $('.roll_characteristics .roll_em').html(response.em);
                Total();
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.error(textStatus, errorThrown);
            }
        });
    });
}

function Random()
{
    $('.random_characteristics button').on('click', function(){
        $.ajax({
            url: "new-random-roll",
            method: "POST",
            dataType: "json",
            data: {},
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {
                $('input[name="ha_imp"]').val(response.ha);
                $('input[name="hp_imp"]').val(response.hp);
                $('input[name="f_imp"]').val(response.f);
                $('input[name="r_imp"]').val(response.r);
                $('input[name="ini_imp"]').val(response.ini);
                $('input[name="ag_imp"]').val(response.ag);
                $('input[name="des_imp"]').val(response.des);
                $('input[name="i_imp"]').val(response.i);
                $('input[name="v_imp"]').val(response.v);
                $('input[name="em_imp"]').val(response.em);
                Total();
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.error(textStatus, errorThrown);
            }
        });
    });
}

function Destiny() 
{
    $('.destiny_up button').on('click', function(){
        if(parseInt($('.extra_points').attr('data-wasted-destiny')) + parseInt($('.extra_points').attr('data-wasted-resilience')) < parseInt($('.extra_points').attr('data-points')))
        {
            $('input[name="destiny"]').val(parseInt($('input[name="destiny"]').val()) + 1);
            $('input[name="fortune"]').val(parseInt($('input[name="fortune"]').val()) + 1);
            $('.extra_points').attr('data-wasted-destiny', parseInt($('.extra_points').attr('data-wasted-destiny')) + 1);
            $('.extra_points').html(parseInt($('.extra_points').attr('data-points')) - (parseInt($('.extra_points').attr('data-wasted-destiny')) + parseInt($('.extra_points').attr('data-wasted-resilience'))));
        }
    });
    $('.destiny_down button').on('click', function(){
        if(parseInt($('.extra_points').attr('data-wasted-destiny')) > 0)
        {
            $('input[name="destiny"]').val(parseInt($('input[name="destiny"]').val()) - 1);
            $('input[name="fortune"]').val(parseInt($('input[name="fortune"]').val()) - 1);
            $('.extra_points').attr('data-wasted-destiny', parseInt($('.extra_points').attr('data-wasted-destiny')) - 1);            
            $('.extra_points').html(parseInt($('.extra_points').attr('data-points')) - (parseInt($('.extra_points').attr('data-wasted-destiny')) + parseInt($('.extra_points').attr('data-wasted-resilience'))));
        }
    });
    
}

function Resilience()
{
    $('.resilience_up button').on('click', function(){
        if(parseInt($('.extra_points').attr('data-wasted-resilience')) + parseInt($('.extra_points').attr('data-wasted-destiny'))< parseInt($('.extra_points').attr('data-points')))
        {
            $('input[name="resilience"]').val(parseInt($('input[name="resilience"]').val()) + 1);
            $('input[name="resolution"]').val(parseInt($('input[name="resolution"]').val()) + 1);
            $('input[name="motivation"]').val(parseInt($('input[name="motivation"]').val()) + 1);
            $('.extra_points').attr('data-wasted-resilience', parseInt($('.extra_points').attr('data-wasted-resilience')) + 1);
            $('.extra_points').html(parseInt($('.extra_points').attr('data-points')) - (parseInt($('.extra_points').attr('data-wasted-destiny')) + parseInt($('.extra_points').attr('data-wasted-resilience'))));
        }
    });

    $('.resilience_down button').on('click', function(){
        if(parseInt($('.extra_points').attr('data-wasted-resilience')) > 0)
        {
            $('input[name="resilience"]').val(parseInt($('input[name="resilience"]').val()) - 1);
            $('input[name="resolution"]').val(parseInt($('input[name="resolution"]').val()) - 1);
            $('input[name="motivation"]').val(parseInt($('input[name="motivation"]').val()) - 1);
            $('.extra_points').attr('data-wasted-resilience', parseInt($('.extra_points').attr('data-wasted-resilience')) - 1);            
            $('.extra_points').html(parseInt($('.extra_points').attr('data-points')) - (parseInt($('.extra_points').attr('data-wasted-destiny')) + parseInt($('.extra_points').attr('data-wasted-resilience'))));
        }
    });
}
