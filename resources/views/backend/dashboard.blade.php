@extends('backend.master.layout')

@section('title') Pannello di Controllo @endsection

@section('breadcrumb') Pannello di Controllo @endsection

@section('content') <p>Benvenuto {{ $currentUser->first_name . ' ' . $currentUser->last_name }} scegli cosa vuoi fare usando il menu qui in alto.</p> @endsection
