    <nav class="navbar navbar-light navbar-expand-md fixed-top" id="mainNav">
        <div class="container"><a class="navbar-brand" href="/">Your Event</a><button
                data-bs-toggle="collapse" class="navbar-toggler navbar-toggler-right" data-bs-target="#navbarResponsive"
                type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"
                value="Menu"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    {if $page == "sub" }
                        <li class="nav-item nav-link"><a class="nav-link" href="/#teamscroll">Back</a></li>
                    {else}
                        <li class="nav-item nav-link"><a class="nav-link" href="#infoscroll">Info</a></li>
                        <li class="nav-item nav-link"><a class="nav-link" href="#teamscroll">Team</a></li>
                        <li class="nav-item nav-link"><a class="nav-link" href="#sponsorenscroll">Partners</a></li>                                   
                    {/if}
                </ul>
            </div>
        </div>
    </nav>