{config_load file="test.conf" section="setup"}
{include file="header.tpl" title="Your Event"}
{include file="nav.tpl"}

    <section class="text-center download-section" style="background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.71) 98%), url(&quot;/content/images/img/concert.jpg&quot;) no-repeat;background-size: auto, cover;background-position:center;">
        <div class="container">
            <div class="col-lg-8 mx-auto">
                <h1>{$name} - {$title} 
                </h1>
                <img width="100" height="80" src={#base_team_images#|cat:$image} style="width: 100%;height: auto;margin-bottom: 2em;">
                <div class="row mb-3">
                                    <div class="col mx-auto" style="max-width: 300px;">
                                        <div class="row g-0 noborder">
                                            {if $linkedin !== "" }
                                                <div class="col">
                                                    <a href={$linkedin}
                                                        target="_blank" class="btn btn-primary btn-default" role="button"
                                                        aria-pressed="true">
                                                        <i class="fa fa-linkedin fa-fw"></i>
                                                    </a>
                                                </div>
                                            {/if}
                                            {if $instagram !== "" }
                                                <div class="col">
                                                    <a href={$instagram}
                                                        target="_blank" class="btn btn-primary btn-default" role="button"
                                                        aria-pressed="true">
                                                        <i class="fa fa-instagram fa-fw"></i>
                                                    </a>
                                                </div>
                                            {/if}
                                            {if $website !== "" }
                                                <div class="col">
                                                    <a href={$website}
                                                        target="_blank" class="btn btn-primary btn-default" role="button"
                                                        aria-pressed="true">
                                                        <i class="fa fa-globe fa-fw"></i>
                                                    </a>
                                                </div>
                                            {/if}
                                            {if $mail !== "" }
                                                <div class="col">
                                                    <a href={"mailto:"|cat:$mail}
                                                        class="btn btn-primary btn-default" role="button"
                                                        aria-pressed="true">
                                                        <i class="fa fa-envelope fa-fw"></i>
                                                    </a>
                                                </div>
                                            {/if}
                                        </div>
                                    </div>
                                </div>
                <p>{$description}
                </p>
                <p> I'm from {$country|capitalize}
                {if $country == "world" }
                    <i class="fa fa-flag-o fa-fw"></i>
                {else}
                    <i class="flag {"flag-"|cat:$country}"></i>
                {/if}
                </p>
                <a href={#base_path#|cat:"#teamscroll"}><button class="btn btn-primary btn-lg btn-default" type="button">Back to Event</button></a>
            </div>
        </div>
    </section>

{include file="footer.tpl"}