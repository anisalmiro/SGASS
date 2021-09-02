
                            <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="modelHeading">Requisi&ccedil;&atilde;o</h4>
                                            
                                        </div>

                                    <form action="{{ action('requis_Controller@store','/pesquisar') }}" name="RequisForm" method="POST">
                                            {{ csrf_field() }}
                                        <div class="modal-body">
                                           
                                              <div class="form-group  col-lg-12">
                                              
                                              <fieldset hidden="true">
                                                <div class="form-group">
                                                    <label>ID</label>
                                                    <select name="idsolec" class="form-control">
                                                        <option value="{{$st->id}}">{{$st->id}}</option>
                                                    </select>
                                                </div>
                                                </fieldset>

                                                
                                             <label for="enabledSelect">Part Number</label>  
                                             <div class="form-group input-group">

                                                    <input name="partnumber" type="text" class="form-control">
                                                    <span class="input-group-btn">
                                                        <button class="btn btn-default" type="button"><i class="fa fa-search"></i>
                                                        </button>
                                                    </span>
                                            </div>

                                                <div class="form-group" name="tipo">
                                                    <label>Tipo de Iten</label>
                                                    <select name="tipo" class="form-control">
                                                        <option value="N/A">Selecionar</option>
                                                        <option value="Ponsumivel">Consumivel</option>
                                                        <option value="Peca">Pe&ccedil;a</option>

                                                    </select>
                                                </div>
                       
                                                <div class="form-group">
                                                    {!! Form::label('Descri&ccedil;&atilde;o:') !!}
                                                    {!! Form::text('desc',null,['class'=>'form-control', 'placeholder'=>'']) !!} 
                                                </div>


                                                <div class="form-group" name="cor">
                                                    <label>Cor</label>
                                                    <select name="cor" class="form-control">
                                                        <option value="">N/A</option>
                                                        <option value="preto">Preto</option>
                                                        <option value="amarelo">Amarelo</option>
                                                        <option value="Magenta">Magenta</option>
                                                        <option value="azul">Azul</option>

                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    {!! Form::label('Quantidade') !!}
                                                    {!! Form::text('quant',null,['class'=>'form-control', 'placeholder'=>'']) !!} 
                                                </div>
                                       

                                            </div>

                                           <div class="modal-footer" class="col-lg-12">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button id="save" type="submit" class="btn btn-primary">Save changes</button>
                                        </div>
                              
                                        </div>
                                </form>
                                   
                                        
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->
                                      
                        <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="modelHeading"></h4>
                                            
                                        </div>

                                        <form action="/ajaxrequis" name="RequisForm" method="POST" id="editForm">
                                            {{ csrf_field() }}
                                            {{ method_field('PUT') }}
                                        <div class="modal-body">
                                           
                                              <div class="form-group  col-lg-12">

                                                <div class="form-group">
                                                     <label for="enabledSelect">Tipo de Iten</label>  
                                                       {!! Form::select('tipo',['placeholder'=>'selecionar'],null,['class'=>'form-control','id'=>'ftipo'])!!}
                                                </div>

                                                <div class="form-group">
                                                     <label for="enabledSelect">Part Number</label>  
                                                       {!! Form::select('partnumber',['placeholder'=>'selecionar '],null,['class'=>'form-control','id'=>'fpart'])!!}
                                                </div>

                                                <div class="form-group">
                                                    {!! Form::label('Descri&ccedil;&atilde;o:') !!}
                                                    {!! Form::text('desc',null,['class'=>'form-control', 'placeholder'=>'','id'=>'fdesc']) !!} 
                                                </div>

                                                <div class="form-group">
                                                    <label>Cor</label>
                                                    <select class="form-control",id='fcor'>
                                                        <option>Selecionar </option>
                                                        <option>Preto</option>
                                                        <option>Magenta</option>
                                                        <option>Ciano</option>
                                                        <option>Amarelo</option>
                                                        <option>N/A</option>
                                                    </select>
                                                </div>
                                       

                                            </div>

                                           <div class="modal-footer" class="col-lg-12">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button id="saven" type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                              
                                        </div>
                                </form>
                                   
                                        
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->              