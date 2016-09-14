$(document).ready(function() {

    $('#reset').click(function() {
        $('table td').each(function() {
            $(this).find('div').attr('class', 'none')
                .find('p').html('');
        })
        $('#inAdraw').html('');
    })

    function inAdraw() {
        var suma = 0;
        $('table td').each(function() {
            if (($(this).find('div').hasClass('1')) || ($(this).find('div').hasClass('0'))) {
                suma = suma + 1;
            }
        })
        if (suma == 9) {
            $('#inAdraw').html('***REMIS***')
                .css({
                    'color': 'blue'
                })
        }
    }

    function wygrana() {
        for (i = 0; i <= 6; i = k) {
            var sumO = 0,
                sumX = 0,
                k = i + 3,
                n = i + 1;
            for (j = n; j <= k; j++) {
                $('table td').each(function() {
                    if (($(this).find('div').attr('id') == j)) {
                        if (($(this).find('div').attr('class')) == 1) {
                            sumX = sumX + 1;
                        } else if (($(this).find('div').attr('class')) == 0) {
                            sumO = sumO + 1;
                        } else {
                            $nowy = $(this).find('div');
                        }
                    }
                })
            }
            if (sumX == 3) {
                alert('Gratuluję!Wygrałeś!');
                exit();
            }
        }
    }

    function przegrana() {
        for (i = 0; i <= 6; i = k) {
            var sumO = 0,
                sumX = 0,
                k = i + 3,
                n = i + 1;
            for (j = n; j <= k; j++) {
                $('table td').each(function() {
                    if (($(this).find('div').attr('id') == j)) {
                        if (($(this).find('div').attr('class')) == 1) {
                            sumX = sumX + 1;
                        } else if (($(this).find('div').attr('class')) == 0) {
                            sumO = sumO + 1;
                        } else {
                            $nowy = $(this).find('div');
                        }
                    }
                })
            }
            if ((sumO == 2) && (sumX !== 1)) {
                $nowy.attr('class', '0')
                    .find('p').html('O')
                    .css({
                        'position': 'absolute',
                        'top': '40%',
                        'left': '40%'
                    });
                alert('Przegrałeś!');
                exit();
            }
        }
    }

    function step() {
        for (i = 0; i <= 6; i = k) {
            var sumO = 0,
                sumX = 0,
                k = i + 3,
                n = i + 1;
            for (j = n; j <= k; j++) {
                $('table td').each(function() {
                    if (($(this).find('div').attr('id') == j)) {
                        if (($(this).find('div').attr('class')) == 1) {
                            sumX = sumX + 1;
                        } else if (($(this).find('div').attr('class')) == 0) {
                            sumO = sumO + 1;
                        } else {
                            $nowy = $(this).find('div');
                        }
                    }
                })
            }
            if ((sumX == 2) && (sumO !== 1)) {
                $nowy.attr('class', '0').find('p').html('O')
                    .css({
                        'position': 'absolute',
                        'top': '40%',
                        'left': '40%'
                    });
                exit();
            }
        }
    }

    function wygrana2() {
        for (i = 1; i <= 3; i++) {
            var sumO = 0,
                sumX = 0;
            for (j = i; j <= 9; j = j + 3) {
                $('table td').each(function() {
                    if (($(this).find('div').attr('id') == j)) {
                        if (($(this).find('div').attr('class')) == 1) {
                            sumX = sumX + 1;
                        } else if (($(this).find('div').attr('class')) == 0) {
                            sumO = sumO + 1;
                        } else {
                            $nowy = $(this).find('div')
                        }
                    }
                })
            }
            if (sumX == 3) {
                alert('Gratuluję!Wygrałeś');
                exit();
            }
        }
    }

    function przegrana2() {
        for (i = 1; i <= 3; i++) {
            var sumO = 0,
                sumX = 0;
            for (j = i; j <= 9; j = j + 3) {
                $('table td').each(function() {
                    if (($(this).find('div').attr('id') == j)) {
                        if (($(this).find('div').attr('class')) == 1) {
                            sumX = sumX + 1;
                        } else if (($(this).find('div').attr('class')) == 0) {
                            sumO = sumO + 1;
                        } else {
                            $nowy = $(this).find('div')
                        }
                    }
                })
            }
            if ((sumO == 2) && (sumX !== 1)) {
                $nowy.attr('class', '0')
                    .find('p').html('O')
                    .css({
                        'position': 'absolute',
                        'top': '40%',
                        'left': '40%'
                    });
                alert('Przegrałeś!');
                exit();
            }
        }
    }

    function step2() {
        for (i = 1; i <= 3; i++) {
            var sumO = 0,
                sumX = 0;
            for (j = i; j <= 9; j = j + 3) {
                $('table td').each(function() {
                    if (($(this).find('div').attr('id') == j)) {
                        if (($(this).find('div').attr('class')) == 1) {
                            sumX = sumX + 1;
                        } else if (($(this).find('div').attr('class')) == 0) {
                            sumO = sumO + 1;
                        } else {
                            $nowy = $(this).find('div')
                        }
                    }
                })
            }
            if ((sumX == 2) && (sumO !== 1)) {
                $nowy.attr('class', '0').find('p').html('O')
                    .css({
                        'position': 'absolute',
                        'top': '40%',
                        'left': '40%'
                    });
                exit();
            }
        }
    }

    function wygrana3() {
        var sumO = 0,
            sumX = 0;
        for (j = 1; j <= 9; j = j + 4) {
            $('table td').each(function() {
                if (($(this).find('div').attr('id') == j)) {
                    if (($(this).find('div').attr('class')) == 1) {
                        sumX = sumX + 1;
                    } else if (($(this).find('div').attr('class')) == 0) {
                        sumO = sumO + 1;
                    } else {
                        $nowy = $(this).find('div')
                    }
                }
            })
        }
        if (sumX == 3) {
            alert('Gratuluję!Wygrałeś');
            exit();
        }
    }

    function przegrana3() {
        var sumO = 0,
            sumX = 0;
        for (j = 1; j <= 9; j = j + 4) {
            $('table td').each(function() {
                if (($(this).find('div').attr('id') == j)) {
                    if (($(this).find('div').attr('class')) == 1) {
                        sumX = sumX + 1;
                    } else if (($(this).find('div').attr('class')) == 0) {
                        sumO = sumO + 1;
                    } else {
                        $nowy = $(this).find('div')
                    }
                }
            })
        }
        if ((sumO == 2) && (sumX !== 1)) {
            $nowy.attr('class', '0')
                .find('p').html('O')
                .css({
                    'position': 'absolute',
                    'top': '40%',
                    'left': '40%'
                });
            alert('Przegrałeś!');
            exit();
        }
    }

    function step3() {
        var sumO = 0,
            sumX = 0;
        for (j = 1; j <= 9; j = j + 4) {
            $('table td').each(function() {
                if (($(this).find('div').attr('id') == j)) {
                    if (($(this).find('div').attr('class')) == 1) {
                        sumX = sumX + 1;
                    } else if (($(this).find('div').attr('class')) == 0) {
                        sumO = sumO + 1;
                    } else {
                        $nowy = $(this).find('div')
                    }
                }
            })
        }
        if ((sumX == 2) && (sumO !== 1)) {
            $nowy.attr('class', '0').find('p').html('O')
                .css({
                    'position': 'absolute',
                    'top': '40%',
                    'left': '40%'
                });
            exit();
        }
    }

    function wygrana4() {
        var sumO = 0,
            sumX = 0;
        for (j = 3; j < 9; j = j + 2) {
            $('table td').each(function() {
                if (($(this).find('div').attr('id') == j)) {
                    if (($(this).find('div').attr('class')) == 1) {
                        sumX = sumX + 1;
                    } else if (($(this).find('div').attr('class')) == 0) {
                        sumO = sumO + 1;
                    } else {
                        $nowy = $(this).find('div')
                    }
                }
            })
        }
        if (sumX == 3) {
            alert('Gratuluję!Wygrałeś');
            exit();
        }
    }

    function przegrana4() {
        var sumO = 0,
            sumX = 0;
        for (j = 3; j < 9; j = j + 2) {
            $('table td').each(function() {
                if (($(this).find('div').attr('id') == j)) {
                    if (($(this).find('div').attr('class')) == 1) {
                        sumX = sumX + 1;
                    } else if (($(this).find('div').attr('class')) == 0) {
                        sumO = sumO + 1;
                    } else {
                        $nowy = $(this).find('div')
                    }
                }
            })
        }
        if ((sumO == 2) && (sumX !== 1)) {
            $nowy.attr('class', '0')
                .find('p').html('O')
                .css({
                    'position': 'absolute',
                    'top': '40%',
                    'left': '40%'
                });
            alert('Przegrałeś!');
            exit();
        }
    }

    function step4() {
        var sumO = 0,
            sumX = 0;
        for (j = 3; j < 9; j = j + 2) {
            $('table td').each(function() {
                if (($(this).find('div').attr('id') == j)) {
                    if (($(this).find('div').attr('class')) == 1) {
                        sumX = sumX + 1;
                    } else if (($(this).find('div').attr('class')) == 0) {
                        sumO = sumO + 1;
                    } else {
                        $nowy = $(this).find('div')
                    }
                }
            })
        }
        if ((sumX == 2) && (sumO !== 1)) {
            $nowy.attr('class', '0').find('p').html('O')
                .css({
                    'position': 'absolute',
                    'top': '40%',
                    'left': '40%'
                });
            exit();
        }
    }
    $('table td').click(function() {
        if ($(this).find('div').hasClass('1') || $(this).find('div').hasClass('0')) {
            alert('Musisz wybierać puste pola!')
        } else {
            $(this).find('div').attr('class', '1')
                .find('p').html('X')
                .css({
                    'position': 'absolute',
                    'top': '40%',
                    'left': '40%'
                });
            var zajeta = $(this).find('div').attr('id'),
                liczbaNiePustych = 0;
            $('table td').each(function() {
                if ($(this).find('div').attr('class') == 1) {
                    liczbaNiePustych = liczbaNiePustych + 1;
                }
            });
            if (liczbaNiePustych == 1) {
                var rand = Math.floor((Math.random() * 9) + 1),
                    rand2 = Math.floor((Math.random() * 4) + 1);
                var pusta = (rand != zajeta) ? rand : ((10 - rand) != 5) ? (10 - rand) : (10 - rand2);
                $('table td').each(function() {
                    if ($(this).find('div').attr('id') == pusta) {
                        $(this).find('div').attr('class', '0')
                            .find('p').html('O')
                            .css({
                                'position': 'absolute',
                                'top': '40%',
                                'left': '40%'
                            });
                    }
                })
            } else if (wygrana()) {
                wygrana();
            } else if (wygrana2()) {
                wygrana2();
            } else if (wygrana3()) {
                wygrana3();
            } else if (wygrana4()) {
                wygrana4();
            } else if (przegrana()) {
                przegrana();
            } else if (przegrana2()) {
                przegrana2();
            } else if (przegrana3()) {
                przegrana3();
            } else if (przegrana4()) {
                przegrana4();
            } else if (step()) {
                step();
            } else if (step2()) {
                step2();
            } else if (step3()) {
                step3();
            } else if (step4()) {
                step4();
            } else {
                var i = 0,
                    ff = [];
                $('table td').each(function() {
                    var rr = $(this).find('div').attr('class');
                    if ((rr != 0) && (rr != 1)) {
                        var y = $(this).find('div').attr('id');
                        ff[i] = y,
                        i = i + 1;
                    }
                });
                var dl = ff.length,
                    rand3 = Math.floor(Math.random() * dl),
                    nez = ff[rand3];
                $('table td').each(function() {
                    if ($(this).find('div').attr('id') == nez) {
                        $(this).find('div').attr('class', '0')
                            .find('p').html('O')
                            .css({
                                'position': 'absolute',
                                'top': '40%',
                                'left': '40%'
                            });
                    }
                })
            }
        }
        inAdraw();
    })
})