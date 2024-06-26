<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <link rel="icon" href="{{ URL::to('/frontend_assets') }}/images/icon.png" type="image/gif" sizes="16x16">
    <title>{{ $websetting->site_name }} - {{ $title }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="EFIAP, ABPS is recognized as one of the leading travel & documentary photographers in Bangladesh.">
    <meta name="keywords"
        content="EFIAP,ABPS,bps,sale,photography,nature,travel,photo,PhotoSale,PhotographyArt,PhotographySale,PhotographyGallery,PrintsForSale,ArtForSale,portfolio,PhotoCollector">
    <meta name="Badal Chandra Sarker" content="Badal Sarkar is a professional photographer based in Bangladesh.">


    <!-- CSS Files
    ================================================== -->
    <link href="{{ asset('frontend_assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" id="bootstrap" />
    <link href="{{ asset('frontend_assets/css/bootstrap-grid.min.css') }}" rel="stylesheet" type="text/css"
        id="bootstrap-grid" />
    <link href="{{ asset('frontend_assets/css/bootstrap-reboot.min.css') }}" rel="stylesheet" type="text/css"
        id="bootstrap-reboot" />
    <link href="{{ asset('frontend_assets/css/plugins.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('frontend_assets/css/style.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('frontend_assets/css/color.css') }}" rel="stylesheet" type="text/css">

    <!-- custom background -->
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/bg.css') }}" type="text/css">

    <!-- color scheme -->
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/colors/yellow.css') }}" type="text/css" id="colors">

    <!-- revolution slider -->
    <link rel="stylesheet" href="{{ asset('frontend_assets/rs-plugin/css/settings.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/rev-settings.css') }}" type="text/css">
    @php
        $bg_image = DB::table('web_setups')->first();
        $imagePath = $bg_image->background_image;

    @endphp
    <style>
        #subheader {
            background: url('<?php echo 'site_logo/' . $imagePath; ?>') 0% 0px / cover;
        }
    </style>
    <style>
        @media (max-width: 575.98px) {
            #logo {
                display: none !important;
            }
        }

        .line-clamp-1 {
            display: -webkit-box;
            -webkit-line-clamp: 1;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .line-clamp-2 {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .line-clamp-3 {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }


        #subheader {
            background-repeat: no-repeat;
        }

        .paddingClass {
            padding-top: 0px !important;
        }
    </style>
</head>

<body id="homepage">
