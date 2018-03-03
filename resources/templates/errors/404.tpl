{title page='Home'}

{extends file="_layouts/app.tpl"}

{block name="content"}
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron">
                    <h1>404</h1>
                    <h2>Oops, this page could not be found</h2>
                    <h4>Click <a href="{url name='home'}">here</a> to go back to the homepage</h4>
                </div>
            </div>
        </div>
    </div>
{/block}