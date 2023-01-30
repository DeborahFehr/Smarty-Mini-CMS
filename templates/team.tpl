<div class="col-xs-6 col-sm-6 col-md-6 col-lg-4 d-flex flex-column justify-content-between"
                                style="margin-bottom: 20px;">
                                <div>
                                    <div class="team-images">
                                        {if $name == "You?" }
                                            <a href={"mailto:"|cat:$mail}><img src={#base_team_images#|cat:$image}></a>
                                        {else}
                                            <a href={"?page="|cat:$name}><img src={#base_team_images#|cat:$image}></a>
                                        {/if}
                                    </div>
                                    <h5 style="margin-bottom: 10px;" >
                                    {if $name == "You?" }
                                        <a href={"mailto:"|cat:$mail} class="team-name">{$name}</a>
                                    {else}
                                        <a href={"?page="|cat:$name} class="team-name">{$name}</a>
                                    {/if}
                                    
                                    {if $country == "world" }
                                        <i class="fa fa-flag-o fa-fw"></i>
                                    {else}
                                        <i class="flag {"flag-"|cat:$country}"></i>
                                    {/if}
                                    </h5>
                                    <h6 style="margin-bottom: 10px;">{$title}</h6>
                                </div>
                                <div>
                                    <p class="hashtags" style="margin-bottom: 10px;">
                                        {if $hashtag1 !== "" }
                                        <span>#{$hashtag1}</span>
                                        {/if}
                                        {if $hashtag2 !== "" }
                                        <span>#{$hashtag2}</span>
                                        {/if}
                                        {if $hashtag3 !== "" }
                                        <span>#{$hashtag3}</span>
                                        {/if}
                                    </p>
                                </div>
                                <div class="row">
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
                            </div>