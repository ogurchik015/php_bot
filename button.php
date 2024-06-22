<?php
    function btn_inline_1( $text1, $callback1){
        return json_encode(
        array(
            'inline_keyboard' => array(
                array(
                    array(
                        'text' => $text1,
                        'callback_data' => $callback1,
                    ),
                )
            ),
        ));
    }
    function btn_inline_2( $text2, $callback2, $text3, $callback3){
        return json_encode(
        array(
            'inline_keyboard' => array(
                array(
                    array(
                        'text' => $text2,
                        'callback_data' => $callback2,
                    ),
                ),
                array(
                    array(
                        'text' => $text3,
                        'callback_data' => $callback3,
                    ),
                )
            ),
        ));
    }
    function btn_inline_3( $text2, $callback2, $text3, $callback3, $text4, $callback4){
        return json_encode(
        array(
            'inline_keyboard' => array(
                array(
                    array(
                        'text' => $text2,
                        'callback_data' => $callback2,
                    ),
                ),
                array(
                    array(
                        'text' => $text3,
                        'callback_data' => $callback3,
                    ),
                ),
                array(
                    array(
                        'text' => $text4,
                        'callback_data' => $callback4,
                    ),
                )
            ),
        ));
    }
     function btn_inline_1($text1, $callback1){
        return json_encode(
        array(
            'inline_keyboard' => array(
                array(
                    array(
                        'text' => $text1,
                        'callback_data' => $callback1,
                    ),
                )
            ),
        ));
    }
    function btn_inline_castom_3($text1, $callback1, $text2, $callback2, $text3, $callback3){
        return json_encode(
        array(
            'inline_keyboard' => array(
                array(
                    array(
                        'text' => $text1,
                        'url' => $callback1,
                    ),
                    array(
                        'text' => $text2,
                        'url' => $callback2,
                    ),
                ),
                array(
                    array(
                        'text' => $text3,
                        'url' => $callback3,
                    ),
                )
            ),
        ));
    }