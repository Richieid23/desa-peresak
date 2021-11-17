@extends('layouts.app')

@section('title')
    Data APBDES - Data Desa Peresak
@endsection

@section('content')
    <div role="main" class="main">
        <section class="page-header page-header-classic">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <ul class="breadcrumb">
                            <li><a href="#">Data Desa</a></li>
                            <li class="active">Data APBDES</li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col p-static">
                        <h1 data-title-border>DATA APBDES DESA PERESAK</h1>
                    </div>
                </div>
            </div>
        </section>

        <div class="container py-4">

            <div class="row">
                <div class="col-lg-10">
                <h4>Data APBDES</h4>

                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>
                                #
                            </th>
                            <th>
                                First Name
                            </th>
                            <th>
                                Last Name
                            </th>
                            <th>
                                Username
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                1
                            </td>
                            <td>
                                Mark
                            </td>
                            <td>
                                Otto
                            </td>
                            <td>
                                @mdo
                            </td>
                        </tr>
                        <tr>
                            <td>
                                2
                            </td>
                            <td>
                                Jacob
                            </td>
                            <td>
                                Thornton
                            </td>
                            <td>
                                @fat
                            </td>
                        </tr>
                        <tr>
                            <td>
                                3
                            </td>
                            <td>
                                Larry
                            </td>
                            <td>
                                the Bird
                            </td>
                            <td>
                                @twitter
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>

    </div>
@endsection
