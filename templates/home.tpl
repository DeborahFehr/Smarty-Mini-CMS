{config_load file="test.conf" section="setup"}
{include file="header.tpl" title="Your Event"}


{include file="nav.tpl"}

{include file="hero.tpl"}

{include file="info.tpl"}

    <section class="text-center content-section" id="team" style="padding-top: 20px;">
        <a class="anchor" id="teamscroll"></a>
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-3">
                    <h2>Team </h2>
                </div>
                <div class="col">
                    <div>
                        <div class="row">

    {section name=member loop=$team}
        {include file="team.tpl" 
        name={$team[member].Name}
        image={$team[member].Image}
        title={$team[member].Title}
        hashtag1={$team[member].Hashtag1}
        hashtag2={$team[member].Hashtag2}
        hashtag3={$team[member].Hashtag3}
        mail={$team[member].Mail}
        website={$team[member].Website}
        instagram={$team[member].Instagram}
        linkedin={$team[member].Linkedin}
        country={$team[member].Country}
        } 
    {/section}

        {include file="team.tpl" 
        name="You?"
        image="hiring.jpg"
        title="Contact us now!"
        hashtag1="joinus"
        hashtag2="smarty"
        hashtag3="demo"
        mail="#"
	    website=""
        instagram=""
        linkedin=""
        country="world"
        } 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

        <section class="text-center content-section" id="sponsors" style="padding-top: 20px;padding-bottom: 0px;">
        <a class="anchor" id="sponsorenscroll"></a>
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-3">
                    <h2>Partners & Friends</h2>
                </div>
                <div class="col">
                        <div class="row partner-logos">

    {section name=friend loop=$partners}
        {include file="partners.tpl" 
        name={$partners[friend].Name}
        image={#base_partner_images#|cat:$partners[friend].Image}
        url={$partners[friend].URL}
        } 
    {/section}

                        </div>
                </div>
            </div>
        </div>
    </section>


{include file="footer.tpl"}