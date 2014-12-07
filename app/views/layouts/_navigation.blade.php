<ul class="title-area">
    <li class="name">
        <h1><a href="#">Site Title</a></h1>
    </li>
</ul>
<section class="top-bar-section">
        <ul class="right ">
            <li class="has-dropdown not-click">
                <a href="#">Menu Item</a>
            </li>
            <li class="divider"></li>
            <li class="has-dropdown not-click">
                <a href="#">Menu Item</a>
                <ul class="dropdown">
                    <li>{{ link_to('/', 'Home', array('class' => 'button'), $secure = false) }}</li>
                    <li>{{ link_to_route('todos.create', 'Create New List', null, array('class' => 'button')) }}</li>
                </ul>
            </li>
            <li class="divider"></li>
            <li class=""><a href="#">Items</a></li>
        </ul>
    </section>