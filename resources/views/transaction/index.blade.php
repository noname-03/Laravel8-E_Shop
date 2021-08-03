@extends('layouts.template')
@section('title', 'Data Transaksi')
@section('content')
        <!-- page content -->
        <div class="right_col" role="main">
            <div class="">
              <div class="page-title">
                <div class="title_left">
                  <h3>User</h3>
                </div>

                <div class="title_right">
                  <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Search for...">
                      <span class="input-group-btn">
                        <button class="btn btn-secondary" type="button">Go!</button>
                      </span>
                    </div>
                  </div>
                </div>
              </div>

              <div class="clearfix"></div>

              <div class="row">
                <div class="col-md-12 col-sm-12 ">
                  <div class="x_panel">
                    <div class="x_title">
                      <h2>User Data</h2>
                      <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        {{-- <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item" href="#">Settings 1</a>
                              <a class="dropdown-item" href="#">Settings 2</a>
                            </div>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li> --}}
                      </ul>
                      <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="row">
                            <div class="col-sm-12">
                              <div class="card-box table-responsive">
                                <a class="btn btn-primary" href="{{ route('user.create') }}" role="button"><i class="fa fa-plus"> Add Data</i></a>
                      <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Total</th>
                            <th>Created At</th>
                            <th>Details Transaction</th>
                          </tr>
                        </thead>

                        @foreach ($transactions as $data)

                        <tbody>
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$data->user->name}}</td>
                                <td>@currency($data->total)</td>
                                <td>{{$data->created_at}}</td>
                                <td>
                                    {{-- <form action="{{ route('user.destroy', ['user'=>$data->id]) }}" method="post">
                                    @csrf @method('DELETE') --}}
                                    {{-- <a class="btn btn-primary" href="{{ route('user.edit', ['user'=>$data->id]) }}" role="button"><i class="fa fa-edit"></i></a> --}}
                                    <a class="btn btn-success" href="{{ route('datatransactionshow', ['transaction'=>$data->id]) }}" role="button"><i class="fa fa-eye"></i></a>
                                    {{-- <button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda mau menghapus data ini ?')"><i class="fa fa-trash"></i></button> --}}
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                        @endforeach
                      </table>
                    </div>
                    </div>
                </div>
              </div>
          <!-- /page content -->
@endsection
