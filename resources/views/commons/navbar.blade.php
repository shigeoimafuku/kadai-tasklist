<header class="mb-4">
            <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
                <a class="navbar-brand" href="/">TaskList</a>
                
                <button type="button" class="navbar-toggler" data-toggle="collaspe" data-target="#nav-bar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collaspe navbar-collaspe" id="nav-bar">
                    <ul class="navbar-nav mr-auto"></ul>
                    <ul class="navbar-nav">
                        <li class="nav-item">{!! link_to_route('tasks.create','新規タスクの入力',[],['class'=>'nav-link']) !!}</li>
                    </ul>
                </div>
            </nav>
</header>