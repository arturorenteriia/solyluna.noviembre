<div class="col s12 m12 l3"> <!-- Note that "m4 l3" was added -->
    <div class="row">
        <div class="col s12 m12 l12">
            <div class="card-panel ">
                  <span class="">
                        <b class="grey-text text-darken-4">Find a Sol & Luna Health Resort</b>
                      <br>
                      {!! Form::open(['route' => 'search', 'method' => 'post']) !!}
                      <select required class="browser-default" name="service" >
                          <option value="" disabled selected>Services Provided</option>
                          <option value="3">Independent Living</option>
                          <option value="1">Assisted Living</option>
                          <option value="2">Memory Care</option>
                      </select>
                        <br>
                      <select class="browser-default" name="select" onchange="slctryole(this,this.form.select2)">
                          <option value="" disabled selected>- - Country - -</option>
                          <option value="Mexico">Mexico</option>
                      </select>
                      <br>
                      <select class="browser-default" name="select2" onchange="slctryole(this,this.form.select3)">
                          <option value="" disabled selected>- - State - -</option>
                      </select>
                      <br>
                      <select  class="browser-default" name="select3" action="">
                          <option value="" disabled selected>- - City - -</option>
                      </select>
                      <br>
                     <div class="form-group">
                         <center>
                             <button class="btn waves-effect waves-light" type="submit" name="action">search
                                 <i class="material-icons right">send</i>
                             </button>
                         </center>
                     </div>
                      {!! Form::close() !!}
                  </span>
            </div>
        </div>
    </div>
</div> <!-- Note that "m4 l3" was added -->