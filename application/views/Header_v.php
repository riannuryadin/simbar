<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href=" <?= base_url();?>assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?= base_url();?>assets/css/bootstrap.min.css">

    <title>Simbar</title>
</head>

<body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-danger">
        <a class="navbar-brand active mr-5" href="#">SIMBAR</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ">
                <li class="nav-item active mr-3">
                    <a class="nav-link" href="#">Kios <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Pesan Cukur <span class="sr-only">(current)</span></a>
                </li>
            </ul>
            <form class="input-group col-md-8  mx-auto">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            </form>
            <!-- Button trigger modal -->

        </div>
        <!-- Button trigger modal -->
        <div class=" btn-group dropleft mr-5" tabindex="-1">
            <button type="button" class="btn btn-danger " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Login
            </button>
            <form class="dropdown-menu  p-3" style="width: 250px;">
                <div class="form-group">
                    <input type="email" class="form-control" id="exampleDropdownFormEmail2" placeholder="username/email/noHP">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="exampleDropdownFormPassword2" placeholder="Password">
                </div>
                <div class="form-group">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="dropdownCheck2">
                        <label class="form-check-label" for="dropdownCheck2">
                            ingatkan saya
                        </label></br>
                        <a href="">lupa kata sandi</a>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-block btn-danger">Sign in</button>
                </div>
            </form>
        </div>

       <a href="<?= site_url('Pendaftaran/view_form');?>"><button type="button" class="btn btn-danger mr-5">Daftar</button></a>


    </nav>

    