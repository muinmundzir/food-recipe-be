@extends('layouts.backend')

@section('title', 'Dashboard')

@section('content')
<div class="card">
    <div class="card-header">
        <h4>Dashboard</h4>
    </div>
</div>
<section class="section">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="card card-statistic-2">
                <div class="card-icon shadow-primary bg-primary">
                    <i class="fas fa-utensils"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                    <h4>Foods</h4>
                    </div>
                    <div class="card-body">
                    20
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="card card-statistic-2">
                <div class="card-icon shadow-warning bg-warning">
                    <i class="fas fa-coffee"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                    <h4>Drinks</h4>
                    </div>
                    <div class="card-body">
                    59
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection