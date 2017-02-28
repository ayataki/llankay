@extends('layouts.app')

@section('title', 'Dashboard')

@section('header')
    <header>
        <nav class="navbar navbar-default navbar-static-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="#" class="navbar-brand">Llankay</a>
                </div> <!-- /.navbar-header -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">Tasks</a></li>
                        <li><a href="#"><i class="fa fa-bell-o"></i> <span class="badge">2</span></a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">jmayta <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#"><i class="fa fa-user-circle"></i> Profile</a></li>
                                <li><a href="#"><i class="fa fa-cogs"></i> Settings</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#"><i class="fa fa-sign-out"></i> Sign Out</a></li>
                            </ul>
                        </li><!-- /.dropdown -->
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>
        </nav>
    </header>
@endsection

