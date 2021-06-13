<form id="searchform" method="get" action="<?php echo esc_url(home_url('/')); ?>">
    <div class="flex ml-2">
        <input type="text" class="w-8/12 px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none search-field focus:outline-none focus:shadow-outline" name="s" placeholder="Search" value="<?php echo get_search_query(); ?>">
        <input type="submit" class="flex px-4 py-2 ml-auto text-white bg-gray-500 border-0 rounded focus:outline-none hover:bg-gray-600" value="Search">
    </div>
</form>