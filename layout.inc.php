<?php
    $GLOBALS['cfg']['NaviWidth']                = '250';
    $GLOBALS['cfg']['FontFamily']               = '"Open Sans", "Segoe UI"';
    $GLOBALS['cfg']['FontFamilyLight']          = '"Open Sans Light", "Segoe UI Light", "Segoe UI"; font-weight: 300';
    $GLOBALS['cfg']['FontFamilyFixed']          = 'Consolas, Monospace, "Lucida Grande"';

    // Change scheme to change font/accent color
    // Possible schemes: White (Default), Green

    $GLOBALS['cfg']['Scheme']                   = "Green";

    $GLOBALS['cfg']['MainBackground']           = '#151515';

    $GLOBALS['cfg']['FootBackground']           = '#151515';
    $GLOBALS['cfg']['BoxBackground']            = '#212121';

    $GLOBALS['cfg']['LoginBackground']          = '#151515';

    $GLOBALS['cfg']['NoticeBackground']         = '#555555';
    $GLOBALS['cfg']['NoticeBorder']             = '#555555';
    $GLOBALS['cfg']['NoticeText']               = '#EEEEEE';
    $GLOBALS['cfg']['SuccessBackground']        = '#555555';
    $GLOBALS['cfg']['SuccessBorder']            = '#555555';
    $GLOBALS['cfg']['SuccessText']              = '#00EE00';
    $GLOBALS['cfg']['ErrorBackground']          = '#555555';
    $GLOBALS['cfg']['ErrorBorder']              = '#555555';
    $GLOBALS['cfg']['ErrorText']                = '#EE0000';
    $GLOBALS['cfg']['WarningBackground']        = '#555555';
    $GLOBALS['cfg']['WarningBorder']            = '#555555';
    $GLOBALS['cfg']['WarningText']              = '#EEEE00';

    $GLOBALS['cfg']['PopupHeaderBackground']    = '#212121';
    $GLOBALS['cfg']['PopupFadeBackground']      = '#000000';
    $GLOBALS['cfg']['PopupBackground']          = '#424242';
    $GLOBALS['cfg']['PopupBorder']              = '#424242';

    $GLOBALS['cfg']['NaviBackground1']          = '#212121';
    $GLOBALS['cfg']['NaviBackground2']          = '#424242';
    $GLOBALS['cfg']['NaviLogoBackground']       = '#565656';
    $GLOBALS['cfg']['NaviActive']               = '#424242';

    $GLOBALS['cfg']['DropdownBackgroundHover']  = '#565656';
    $GLOBALS['cfg']['DropdownBackground']       = '#424242';
    $GLOBALS['cfg']['DropdownBorder']           = '#424242';

    $GLOBALS['cfg']['TableBackground']          = '#212121';
    $GLOBALS['cfg']['TableHover']               = '#252525';
    $GLOBALS['cfg']['TableMarked']              = '#252525';
    $GLOBALS['cfg']['TableOdd']                 = '#191919';
    $GLOBALS['cfg']['TableEven']                = '#151515';
    $GLOBALS['cfg']['TableHeader']              = '#252525';

    $GLOBALS['cfg']['ToolbarBackground']        = '#212121';
    $GLOBALS['cfg']['ToolbarBorder']            = '#424242';

    $GLOBALS['cfg']['InputBackground']          = '#212121';
    $GLOBALS['cfg']['InputBackgroundHover']     = '#252525';
    $GLOBALS['cfg']['InputBorder']              = '#424242';
    $GLOBALS['cfg']['InputBorderHover']         = '#505050';

    // Set the accent/font colors acording to scheme
    switch($GLOBALS['cfg']['Scheme']){
        case 'Green':
            $GLOBALS['cfg']['MainText']                 = '#00EE00';
            $GLOBALS['cfg']['MainTextFaded']            = '#00DD00';
            $GLOBALS['cfg']['MainHeaderText']           = '#00E000';
            $GLOBALS['cfg']['MainBorder']               = '#00CC00';
            $GLOBALS['cfg']['MainLinkColor']            = '#257F23';
            $GLOBALS['cfg']['FootText']                 = '#00EE00';
            $GLOBALS['cfg']['FootBorder']               = '#00EE00';
            $GLOBALS['cfg']['BoxText']                  = '#00EE00';
            $GLOBALS['cfg']['BoxBorder']                = '#00EE00';
            $GLOBALS['cfg']['LoginText']                = '#00EE00';
            $GLOBALS['cfg']['PopupHeaderText']          = '#00EE00';
            $GLOBALS['cfg']['PopupText']                = '#00EE00';
            $GLOBALS['cfg']['NaviText']                 = '#00EE00';
            $GLOBALS['cfg']['NaviTextHover']            = '#00DD00';
            $GLOBALS['cfg']['DropdownText']             = '#00EE00';
            $GLOBALS['cfg']['TableBorder']              = '#00DD00';
            $GLOBALS['cfg']['TableText']                = '#00EE00';
            $GLOBALS['cfg']['ToolbarText']              = '#00EE00';
            $GLOBALS['cfg']['InputText']                = '#00EE00';
            /* Icons */
            // mfizz-php-alt
            $GLOBALS['cfg']['icons']['login'] = "data:image/png;base64,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";
            // fa-info-circle
            $GLOBALS['cfg']['icons']['info'] = "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAMAAAAoLQ9TAAAAmVBMVEUAAAAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gCRugFdAAAAMnRSTlMAAQIDBQYHCQwNExkaHR8gKistLjAxTFFfaG1wg4WOlZeYpai5uszOz9HT2dre4O31+aEh3o4AAACDSURBVBhXVY9HDsIAAMMMFChlz7Ipey///3EcyqpvsZRIASCabO6HpJcjJT/X1XCk12qad2oXVNsAC9VBsaz6CKHhPwlMVUukFQ04Z0Wdp/od1RaXrKinGz8R0FRt5iFcq0tgqQYAM31UgMJex3EcxyftfL+oeqvxJpps78ek/3mb5QXcZxu4vsCgTwAAAABJRU5ErkJggg==";
            // fa-cog
            $GLOBALS['cfg']['icons']['cog'] = "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAMAAAAoLQ9TAAAAk1BMVEUAAAAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gDeonbsAAAAMHRSTlMAAQIDBAUHCQ4PEBEYGicoLzdOW19ia4iPkpWrrbK6vsDBw8rR1drc3ujr7e/1+f0xTfl+AAAAhklEQVQYGU3BBxKCMABFwR9jQMXee4mK2N/9T2cyjOiuSkdeqqRTKyAxk6aipOC8Arzn1lAw4GeoaM7XRpFbQtExLQ/7uqQrQU9SRnC3IkolGSKnnKArKSN4Wqm2gEvbNA/gE0UzvrZGQZ+fkQJ3Il8DfsejpchNrd6QmnGmiudl9K/mrEofFOYXIAj9skcAAAAASUVORK5CYII=";
            // icomoon-database
            $GLOBALS['cfg']['icons']['db'] = "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAMAAAAoLQ9TAAAA/1BMVEUAAAAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gD3xeF+AAAAVHRSTlMAAQIDBQYHCQwPFBcYGhweIyUqKywuLzAxMzY3OTs8RklLTVBRUlVWWWJneHyFhomLj5GYm52gpa2vsLK1ubq8wMXKzNHX2drg5Ojp6+3x9ff5+/2ceIR+AAAAn0lEQVQYV2WMRRLCUBAF32CB4IGPu7u7a3Cf+5+FHZUUveteNAA521moz/NmVI1LACxz1tAi5FiHgqI+CET0wQ74xz/7dJ2EjBlGh0ikUzGfTEgKLN+NkM1EIKPkLu1Z4KR/eOFYafReIITJGq3Ue5Nhu5p2kUfB9JCXDQAASME+C1yYmR/qantmZmYFgZv22SSAPOXB+vi67ma1hIR/vn7wNA4QsIaVAAAAAElFTkSuQmCC";
            // fi-database
            $GLOBALS['cfg']['icons']['db-group'] = "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAMAAAAoLQ9TAAAAxlBMVEUAAAAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gC8oUAVAAAAQXRSTlMAAwQGBwgKCw0UFRcbHCAhIioxNTY4OUBCREZJS01SVl1eX2FrbG1veXt8j5qbnaCjsLS3usHZ2t7g4ubx8/X5++WWKb8AAACTSURBVBgZnc9XFoIwFIThIcGGvUSxBDAWIopeu2Bl/5syroBz/B/m4XsbILcZ0dYpbYg0PKJdA0/Oe1Phc35iSYG3l3gATSUGwJ6lQDX8Bz5akxJHre8sjXQcIjMp8VuWmjEQOGclbrWRgXnlYMCGp0QEGCjDDfFe95Og+3JXmXWNxWWBlpRj2xpK2UFdykkx9yu+LNkV5wURh+MAAAAASUVORK5CYII=";
            // fa-refresh
            $GLOBALS['cfg']['icons']['reload'] = "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAMAAAAoLQ9TAAAAw1BMVEUAAAAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gD6iANiAAAAQHRSTlMAAQMFCQoMDQ4QFBUXGBseIiMlJikqLi8xPEpLTFteX2RpcHF/goWIjJGVm52rurzBytHT19rc4ujr8fX3+fv9JBHNpAAAAJRJREFUGBmFwVdWwlAUQNETg9hFSlDEhgUEA/Ye5Mx/VN71cPHr3iTZTvtgk5X8am5472e0esD+p38e+4sStuc6aa7XmneGkuxZD0lu1JIjPSYpFmrJ0NeMZGa45H973VBnqejW+DGckxTawDAiyd98AcNtTth90g5opdX4dHCvngHVaO3ape8eYQPYunj4+pie5IRfij4aV5ZwOWkAAAAASUVORK5CYII=";
            // fa-file-text
            $GLOBALS['cfg']['icons']['doc'] = "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAMAAAAoLQ9TAAAAS1BMVEUAAAAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gBcycV1AAAAGHRSTlMAAgMFBggJCxASJigxNEpLTHm5uszT3uhw/dMAAAAAVElEQVQYV33MSQ6AMAhAUdQ6DxXH3v+kgiVQY9K/Ii8AQJBgK+FNIexRDEQUENGnMLZUEeE+uJOmKcKs7wUsgaXi6gz8TlbHNZmNL1wpDASutzqABzVTD4elmJh0AAAAAElFTkSuQmCC";
            // fa-home
            $GLOBALS['cfg']['icons']['home'] = "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAMAAAAoLQ9TAAAAh1BMVEUAAAAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gBHQZFqAAAALHRSTlMAAgQGCA0SFB4fICcoKistNERKVnR+f46PoKKqq7e5xcjP09re5Ovt8fP7/eIYXwAAAABsSURBVBhXjY03FoIAAMUCKihWxF5B7OT+53NQcPOZ6SfLh3+JOgTjwdenPiexNj4zTd00IVjfh4v56FGH9rFMdrrtlbYA4ss+OakW3cM5AvLl8Kaq1/4qB0IqP1SEAKhmmTYv7/krFHUo+IcXJhsO/oWZbWkAAAAASUVORK5CYII=";
            // fa-sign-out
            $GLOBALS['cfg']['icons']['sign-out'] = "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAMAAAAoLQ9TAAAAY1BMVEUAAAAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gAA7gCeifxyAAAAIHRSTlMAAQUGDQ4PEBESEzk6SkxQUVKgo77H1dfZ5ujp6+3v8ZjbIt8AAABoSURBVBhXhY5HDoAwDAQNIfTeO/v/V1JsEAIk5hLtxHGW6EVSA4iIQp9zVmillEFULmxaLZMlJm8/oS6B0RFRQRhsFrjorYdA/j3RnXnQvMMwNyr55d7DPZrmZ9PZ45u02R7HRIHkX1aSbQumaYekKgAAAABJRU5ErkJggg==";
            break;
        default:
            $GLOBALS['cfg']['MainText']                 = '#EEEEEE';
            $GLOBALS['cfg']['MainTextFaded']            = '#DDDDDD';
            $GLOBALS['cfg']['MainHeaderText']           = '#E0E0E0';
            $GLOBALS['cfg']['MainBorder']               = '#CCCCCC';
            $GLOBALS['cfg']['FootText']                 = '#EEEEEE';
            $GLOBALS['cfg']['FootBorder']               = '#EEEEEE';
            $GLOBALS['cfg']['BoxText']                  = '#EEEEEE';
            $GLOBALS['cfg']['BoxBorder']                = '#EEEEEE';
            $GLOBALS['cfg']['LoginText']                = '#EEEEEE';
            $GLOBALS['cfg']['NoticeText']               = '#EEEEEE';
            $GLOBALS['cfg']['SuccessText']              = '#00EE00';
            $GLOBALS['cfg']['ErrorText']                = '#EE0000';
            $GLOBALS['cfg']['WarningText']              = '#EEEE00';
            $GLOBALS['cfg']['PopupHeaderText']          = '#EEEEEE';
            $GLOBALS['cfg']['PopupText']                = '#EEEEEE';
            $GLOBALS['cfg']['NaviText']                 = '#EEEEEE';
            $GLOBALS['cfg']['NaviTextHover']            = '#DDDDDD';
            $GLOBALS['cfg']['DropdownText']             = '#EEEEEE';
            $GLOBALS['cfg']['TableBorder']              = '#DDDDDD';
            $GLOBALS['cfg']['TableText']                = '#EEEEEE';
            $GLOBALS['cfg']['ToolbarText']              = '#EEEEEE';
            $GLOBALS['cfg']['InputText']                = '#EEEEEE';
            /* Icons */
            // mfizz-php-alt
            $GLOBALS['cfg']['icons']['login'] = "data:image/png;base64,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";
            // fa-info-circle
            $GLOBALS['cfg']['icons']['info'] = "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAMAAAAoLQ9TAAAAmVBMVEUAAADu7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u4e1wwNAAAAMnRSTlMAAQIDBQYHCQwNExkaHR8gKistLjAxTFFfaG1wg4WOlZeYpai5uszOz9HT2dre4O31+aEh3o4AAACDSURBVBhXVY9HDsIAAMMMFChlz7Ipey///3EcyqpvsZRIASCabO6HpJcjJT/X1XCk12qad2oXVNsAC9VBsaz6CKHhPwlMVUukFQ04Z0Wdp/od1RaXrKinGz8R0FRt5iFcq0tgqQYAM31UgMJex3EcxyftfL+oeqvxJpps78ek/3mb5QXcZxu4vsCgTwAAAABJRU5ErkJggg==";
            // fa-cog
            $GLOBALS['cfg']['icons']['cog'] = "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAMAAAAoLQ9TAAAAk1BMVEUAAADu7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u5dRHI/AAAAMHRSTlMAAQIDBAUHCQ4PEBEYGicoLzdOW19ia4iPkpWrrbK6vsDBw8rR1drc3ujr7e/1+f0xTfl+AAAAhklEQVQYGU3BBxKCMABFwR9jQMXee4mK2N/9T2cyjOiuSkdeqqRTKyAxk6aipOC8Arzn1lAw4GeoaM7XRpFbQtExLQ/7uqQrQU9SRnC3IkolGSKnnKArKSN4Wqm2gEvbNA/gE0UzvrZGQZ+fkQJ3Il8DfsejpchNrd6QmnGmiudl9K/mrEofFOYXIAj9skcAAAAASUVORK5CYII=";
            // icomoon-database
            $GLOBALS['cfg']['icons']['db'] = "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAQAAAC1+jfqAAAA7UlEQVQokYXRsSvFcRSG8fMldEtZbpFkuVnQRYrErHRTKMpq8S8YrJQMsikpi1GkDGSwWGQx6ZoMBpJPGSRJ10Ci/K73jM/b6emciIiQN2HdsbIXd87tWjAsFxERGhypZMyqFCYzcUVFZ5ipWiiGgaqF5ojQbe8P9G5DqxTG1Ueo1aJoRMmYIV3yUoRRxXDizbI+TeqkCEmtnHazrj4dbqs6dIQWpxnwybQU+iWNBs1bsmnfjjULStokBZ3hwLUpeTXxI3J6bX063H+vfFZ26sLd70v2eMxUXJEiQlIwZ9uZG68eXDq0aOTrm//lAxvEaTXOET2pAAAAAElFTkSuQmCC";
            // fi-database
            $GLOBALS['cfg']['icons']['db-group'] = "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAQAAAC1+jfqAAAA1ElEQVQoU73KsSpFAQDG8a/cDpHNzcCA0WagY5OkpLMYbJzM6M4n3sHuptR5AYNSNo/BIN3B+CvJIMM1uHkB5f8t3/BL/pwjrdaVrimXWq0msafVurYQ7wqFNYdK+wqFex0vJhSWncZbklhUK20kiRsdgyQxq/cv4Euj0aqV7jQarzoGzjX6ejEcrVb+/o7B6PVi6EDXg1rp2ZztETg24/YHjCf21ErnSTIC04lNvfh0Yd2LA6s+bDozNOZJX+nRSSypVHaMG7OlUllJzKtUdk3mz30DN8LgUYLVaHMAAAAASUVORK5CYII=";
            // fa-refresh
            $GLOBALS['cfg']['icons']['reload'] = "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAQAAAC1+jfqAAAA2UlEQVQoz2NggIN3jO9E36m9U3rHx4AJ3rG+K3z3891/KHz0zvsdI1BU9Z0NRFr63Wu4JAyeAir6+24uSFoEqnfqO+V3XO84geRsuLK5IJsvg5n6KFY2IRQYghleKNJaQMPhClqB1C2Qk5AU7IJbUcBAOXgn8U4PCnnQZLSAYpwM737D7YtHkwaJyTHApTvQQvYOUOw6iAlT0POOFS4t/u4iWEwTpuA7lJz4Lvpd5rs9UC1xENXf33W8Y35XjxYTX6HRBFTAC6UF3qW8O/ju47sX71a/80FYBwAaBu/H0puAPQAAAABJRU5ErkJggg==";
            // fa-file-text
            $GLOBALS['cfg']['icons']['doc'] = "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAMAAAAoLQ9TAAAAS1BMVEUAAADu7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u5SvVjoAAAAGHRSTlMAAgMFBggJCxASJigxNEpLTHm5uszT3uhw/dMAAAAAVElEQVQYV33MSQ6AMAhAUdQ6DxXH3v+kgiVQY9K/Ii8AQJBgK+FNIexRDEQUENGnMLZUEeE+uJOmKcKs7wUsgaXi6gz8TlbHNZmNL1wpDASutzqABzVTD4elmJh0AAAAAElFTkSuQmCC";
            // fa-home
            $GLOBALS['cfg']['icons']['home'] = "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAMAAAAoLQ9TAAAAh1BMVEUAAADu7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u5V3UOyAAAALHRSTlMAAgQGCA0SFB4fICcoKistNERKVnR+f46PoKKqq7e5xcjP09re5Ovt8fP7/eIYXwAAAABsSURBVBhXjY03FoIAAMUCKihWxF5B7OT+53NQcPOZ6SfLh3+JOgTjwdenPiexNj4zTd00IVjfh4v56FGH9rFMdrrtlbYA4ss+OakW3cM5AvLl8Kaq1/4qB0IqP1SEAKhmmTYv7/krFHUo+IcXJhsO/oWZbWkAAAAASUVORK5CYII=";
            // fa-sign-out
            $GLOBALS['cfg']['icons']['sign-out'] = "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAMAAAAoLQ9TAAAAY1BMVEUAAADu7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7u7CNzfkAAAAIHRSTlMAAQUGDQ4PEBESEzk6SkxQUVKgo77H1dfZ5ujp6+3v8ZjbIt8AAABoSURBVBhXhY5HDoAwDAQNIfTeO/v/V1JsEAIk5hLtxHGW6EVSA4iIQp9zVmillEFULmxaLZMlJm8/oS6B0RFRQRhsFrjorYdA/j3RnXnQvMMwNyr55d7DPZrmZ9PZ45u02R7HRIHkX1aSbQumaYekKgAAAABJRU5ErkJggg==";
            break;
    }
?>