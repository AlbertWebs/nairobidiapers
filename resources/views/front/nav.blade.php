<nav class="main-menu menu-style4 d-none d-lg-block">
    <ul>
        <li class="menu-item-has-children v1">
            <a href="{{url('/')}}"><i class="fa fa-house"></i>Home</a>
        </li>

        <?php
            $Cats = DB::table('categories')->get()
        ?>
        @foreach ($Cats as $c)
        <li>
            <a href="{{url('/')}}/products/{{$c->slung}}">{{$c->title}}</a>
        </li>
        @endforeach

    </ul>
</nav>
