                              <div class="col-lg-4">
                                   <form role="form">
                                        <div class="form-group input-group">
                                            <span class="input-group-addon">Iten</span>
                                            <input type="text" class="form-control" placeholder="Tipo de iten">
                                        </div>
                                    </form>
                             </div>
                                <div class="col-lg-4">
                                   <form role="form">
                                        <div class="form-group input-group">
                                            <span class="input-group-addon">Codigo</span>
                                            <input type="text" class="form-control" placeholder="codigo">
                                        </div>
                                    </form>
                             </div>
                            <!--  <div class="col-lg-4">
                                   <form role="form">
                                        <div class="form-group input-group">
                                            <a href="{{ url('v_stock_pdf/pdf') }}" class="btn btn-danger">PDF File</a>
                                        </div>
                                    </form>
                             </div> -->
                             <div class="col-lg-4">
                                   <form role="form">
                                        <div class="form-group input-group">
                                            <a href="{{ url('v_stock_pdf') }}" class="btn btn-danger">PDF File</a>
                                        </div>
                                    </form>
                             </div>


<!-- /.col-lg-6 -->
                <div class="col-lg-12">
                         

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Stock
                        </div>
                    
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Tipo de Iten</th>
                                            <th>Descri&ccedil;&aacute;o</th>
                                            <th>Part Number</th>
                                            <th>Cor</th>
                                            <th>Quantidade</th>
                                            
                                        </tr>
                                    </thead>
                                    @foreach($stock_sl as $st)
                                    <tbody>
                                        <tr class="success">
                                            <td>{{$st->idcons}}</td>
                                            <td>{{$st->tipo}}</td>
                                            <td>{{$st->designacao}}</td>
                                            <td>{{$st->partN}}</td>
                                            <td>{{$st->cor}}</td>
                                            <td>{{$st->quantidade}}</td>
                                            <td>
                                
                                            </td>
                                        </tr>
                                    </tbody>
                                    @endforeach
                                
                                </table>
                               {!!$stock_sl->render()!!}
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->



