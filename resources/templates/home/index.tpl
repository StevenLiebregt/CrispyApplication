{title page='Home'}

{extends file="_layouts/app.tpl"}

{block name="content"}
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron">
                    <h1>Welcome to CrispySystem</h1>
                    <h3><a href="{url name='item' parameters=['id' => $id]}">View item : {$id}</a></h3>
                </div>
            </div>
        </div>
    </div>
{/block}