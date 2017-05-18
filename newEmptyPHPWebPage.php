<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
           <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
        <script src="jquery-3.2.0.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </head>
    <body>
       <div id="main">
        <div id="content">
            <form id="newTaskForm" class="add-task">
                <div class="form-actions">
                    <div class="input-group">
                        <div class="container">
                            <dir class="row">
                                <table border="0">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="col-md-5 col-lg-5 col-sm-5 col-xs-5 col">Tài khoản</td>
                                            <td class="col-md-7 col-lg-7 col-sm-7 col-xs-7"><input  class="form-control" ng-model="tentaikhoan" size="30px" type="text" placeholder="tên đăng nhập"/></td>
                                        </tr>
                                        <tr>
                                            <td class="col-md-5 col-lg-5 col-sm-5 col-xs-5 col">Mật khẩu</td>
                                            <td class="col-md-7 col-lg-7 col-sm-7 col-xs-7"><input class="form-control" ng-model="matkhau" size="30px" type="password" placeholder="mật khẩu"/></td>
                                        </tr>
                                        <tr>
                                            <td class="col-md-5 col-lg-5 col-sm-5 col-xs-5 col">Nhập lại mật khẩu</td>
                                            <td class="col-md-7 col-lg-7 col-sm-7 col-xs-7"><input class="form-control" ng-model="nhaplaimk" size="30px" type="password" placeholder="nhập lại mật khẩu"/></td>
                                        </tr>
                                        <tr>
                                            <td class="col-md-5 col-lg-5 col-sm-5 col-xs-5 col">Email</td>
                                            <td class="col-md-7 col-lg-7 col-sm-7 col-xs-7"><input class="form-control" ng-model="email" size="30px" type="text" placeholder="email"/></td>
                                        </tr>
                                        <tr>
                                            <td class="col-md-5 col-lg-5 col-sm-5 col-xs-5 col"></td>
                                            <td class="col-md-7 col-lg-7 col-sm-7 col-xs-7"><div class="input-group-btn">
                                                    <button class="btn btn-default" type="submit" ng-click="them(tentaikhoan, matkhau, nhaplaimk, email)"  ><i class="glyphicon glyphicon-plus"></i>&nbsp;Đăng ký</button>
                                                </div></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>

                            </dir>
                        </div>


                    </div>
                </div>
            </form>

            <br /><br />
            <label style="margin-left:40px">Thông báo lỗi</label>


        </div>
    </div>
    </body>
</html>
