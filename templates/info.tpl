<section class="text-center content-section" id="info" style="padding-top: 20px;">
        <a class="anchor" id="infoscroll"></a>
        <div class="container">
            <div class="row" style="padding-right: 20px;padding-left: 20px;">
                <div class="col" style="margin-bottom: 20px;">
                    <h2>{$info_files.Title}</h2>
                        {section name=text loop=$info_text}
                        <p>{$info_text[text].Paragraph}</p>
                        {/section}
                    <a href={$info_files.Button_URL} target="_blank" disabled={$info_files.Button_Disabled}
                        class="btn btn-primary">
                        {$info_files.Button_Text}</a>
                </div>
                <div class="col-12 mx-auto col-md-5"><img src={#base_images#|cat:$info_files.Image} style="max-width: 100%;">
                </div>
            </div>
        </div>
    </section>