  <div class="logo">
                <a href="/admin" class="simple-text">
                    RM Audio's Panel
                </a>
            </div>

            <ul class="nav">
                <li id='act' class="">
                <a href="/admin">
                        <i class="ti-panel"></i>
                        <p>Dashboard</p>
                    </a>
                </li >
                <li id='act'>
                <a href="{{route('posts.index')}}">
                        <i class="ti-layout-list-post"></i>
                        <p>Posts</p>
                    </a>
                </li >
                <li id='act'>
                    <a href="{{route('categories.index')}}">
                        <i class="ti-view-list-alt"></i>
                        <p>Category</p>
                    </a>
                </li>
                <li id='act'>
                    <a href="{{route('subscribers.index')}}">
                        <i class="ti-user"></i>
                        <p>Subscriber</p>
                    </a>
                </li>
                                
            </ul>