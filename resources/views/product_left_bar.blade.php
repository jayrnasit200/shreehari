   <div id="column-left" class="col-sm-3 hidden-xs column-left">
        <div class="column-block" >
            <div class="columnblock-title">Categories</div>
            <div class="category_block">
                <ul class="box-category treeview-list treeview">
                    @foreach(get_category() as $val)
                      <li><a class="activSub">{{ $val->name }}</a>
                      <ul>
                        @foreach(get_subcategory_by_id($val->id) as $val)
                        <li><a href="{{ url('/category',$val->name) }}">{{ $val->name }}</a></li>
                        @endforeach
                      </ul>
                    @endforeach
                   
                </ul>
            </div>
        </div>
       
        
    </div>