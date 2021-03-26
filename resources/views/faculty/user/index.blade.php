@extends('faculty.templates.app')
@section('content')

<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Users</h4>
              </div>
              <div class="card-body">
                                  <div class="row">
                    <div class="col-12 text-right mb-3">
                      <a href="https://black-dashboard-pro-laravel.creative-tim.com/user/create" class="btn btn-sm btn-primary">Add user</a>
                    </div>
                  </div>
                                <div class="table-responsive">
                  <table id="datatables" class="table table-striped table-no-bordered table-hover" style="display:none">
                    <thead class="text-primary">
                      <th>
                          Photo
                      </th>
                      <th>
                          Name
                      </th>
                      <th>
                        Email
                      </th>
                      <th>
                        Role
                      </th>
                      <th>
                        Creation date
                      </th>
                                              <th class="text-right">
                          Actions
                        </th>
                                          </thead>
                    <tbody>
                                              <tr>
                          <td>
                            <div class="avatar avatar-sm rounded-circle img-circle" style="width:100px; height:100px;overflow: hidden;">
                                <img src="/storage/../black/img/jana.jpg" alt="" style="max-width: 100px;">
                            </div>
                          </td>
                          <td>
                            Admin
                          </td>
                          <td>
                            <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="91f0f5fcf8ffd1f3fdf0f2fabff2fefc">[email&#160;protected]</a>
                          </td>
                          <td>
                            Admin
                          </td>
                          <td>
                            2021-02-28
                          </td>
                                                      <td class="td-actions text-right">
                                                                                                                          </td>
                                                  </tr>
                                              <tr>
                          <td>
                            <div class="avatar avatar-sm rounded-circle img-circle" style="width:100px; height:100px;overflow: hidden;">
                                <img src="/storage/../black/img/lora.jpg" alt="" style="max-width: 100px;">
                            </div>
                          </td>
                          <td>
                            Creator
                          </td>
                          <td>
                            <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="5f3c2d3a3e2b302d1f3d333e3c34713c3032">[email&#160;protected]</a>
                          </td>
                          <td>
                            Creator
                          </td>
                          <td>
                            2021-02-28
                          </td>
                                                      <td class="td-actions text-right">
                                                                <form action="https://black-dashboard-pro-laravel.creative-tim.com/user/2" method="post">
                                      <input type="hidden" name="_token" value="ZmVLA1NEoXSOPK1P0hBBK6IH1lhNdiL7CEUq0tQS">                                      <input type="hidden" name="_method" value="delete">
                                                                                                              </form>
                                                          </td>
                                                  </tr>
                                              <tr>
                          <td>
                            <div class="avatar avatar-sm rounded-circle img-circle" style="width:100px; height:100px;overflow: hidden;">
                                <img src="/storage/../black/img/mike.jpg" alt="" style="max-width: 100px;">
                            </div>
                          </td>
                          <td>
                            Member
                          </td>
                          <td>
                            <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="91fcf4fcf3f4e3d1f3fdf0f2fabff2fefc">[email&#160;protected]</a>
                          </td>
                          <td>
                            Member
                          </td>
                          <td>
                            2021-02-28
                          </td>
                                                      <td class="td-actions text-right">
                                                                <form action="https://black-dashboard-pro-laravel.creative-tim.com/user/3" method="post">
                                      <input type="hidden" name="_token" value="ZmVLA1NEoXSOPK1P0hBBK6IH1lhNdiL7CEUq0tQS">                                      <input type="hidden" name="_method" value="delete">
                                                                                                              </form>
                                                          </td>
                                                  </tr>
                                          </tbody>
                  </table>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
@endsection
