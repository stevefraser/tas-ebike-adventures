
<div class="booking-widget-wrapper">

        <h3>make a booking</h3>


        <div class="step_wrapper">

            <div class="step_heading">Step 1 - No of guests</div>

            <div class="step_content one">

                      <div class="styled-select">
                          <select id="choosePlaces">
                            <option selected disabled>0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                          </select>
                      </div>

                      <div class="placesChosen"></div>


            </div>

        </div>



        <div class="step_wrapper">

            <div class="step_heading">Step 2 - Choose a date</div>

            <div class="step_content two">

                <div class="view_tab_wrapper">
                  <div data-show="calendar" class="view_tab cal active">Calendar</div>
                  <div data-show="list" class="view_tab list">list dates</div>
                </div>

                <div class="view list">

                    <?php

                        // if ( get_query_var('paged') ) {
                        //     $paged = get_query_var('paged');
                        // } else if ( get_query_var('page') ) {
                        //     $paged = get_query_var('page');
                        // } else {
                        //     $paged = 1;
                        // }

                        // $args = array(
                        //         'post_type' => 'tour',
                        //         'posts_per_page' => 9,
                        //         'paged' => $paged,
                        //         // 'orderby' =>'date',
                        //         'order' => 'ASC',
                        //         //'tax_query' => array(
                        //             // 'relation' => 'AND',
                        //             // array(
                        //             //     'taxonomy' => 'region',
                        //             //     'field'    => 'slug',
                        //             //     'terms'    => explode(',', $regionGet),
                        //             //     'operator' => 'IN',
                        //             // ),
                        //         //),
                        // );

                        // $loop = new WP_Query( $args );

                        //     if ( $loop->have_posts() ) {

                        //             while ( $loop->have_posts() ) : $loop->the_post();

                                            //$theID = $loop->post->ID;
                                            $the_id = get_the_ID();

                                            //$date = get_post_meta( $the_id, 'date', true );
                                            //$newdate = new DateTime($date);
                                            //$slug = basename(get_permalink());
                                            //$places = get_post_meta( $the_id, 'places', true );

                                            //
                                            if (have_rows('tour_dates')) :
                                                while(have_rows('tour_dates')) : the_row();
                                                    $date = get_sub_field('datum');
                                                    $places = get_sub_field('places');
                                                    $newdate = new DateTime($date);

                                                    echo '<div class="bookingTab">';
                                                    echo '<div class="tourID">' . $the_id . '</div>';
                                                    echo '<span class="date">' . $newdate->format('j F, Y') . ' - ' . $places . ' places left</span>';
                                                    //echo $places . ' places left';
                                                    echo '</div>';

                                                    $sendDate = "d" . $date;
                                                    create_list($sendDate);
                                                    create_date_array($sendDate,$the_id);


                                                endwhile;
                                            endif;
                                            //





                                    //endwhile;



                            // } else {
                            //         echo '<h4>No tours found.</h4>';
                            // }

                            // echo '<div class="clear"></div>';

                            // $pagination_args = array(
                            //     'base'            => get_pagenum_link(1) . '%_%',
                            //     'format'          => 'page/%#%',
                            //     'total'           => $loop->max_num_pages,
                            //     'current'         => $paged,
                            //     'show_all'        => true,
                            //     'end_size'        => 1,
                            //     //'mid_size'        => $pagerange,
                            //     'prev_next'       => false,
                            //     'prev_text'       => __('&laquo;'),
                            //     'next_text'       => __('&raquo;'),
                            //     'type'            => 'list',
                            //     'add_args'        => false,
                            //     'add_fragment'    => ''
                            // );

                            // $paginate_links = paginate_links($pagination_args);

                            // if ($paginate_links) {
                            //   echo "<nav class='result_pagination'>";
                            //     echo $paginate_links;
                            //   echo "</nav>";
                            // }

                            // wp_reset_postdata();


                    ?>

                </div>

                <div class="view calendar">

                    <?php

                      build_calendar('December','2016','THU');

                      //global $date_array;
                      //var_dump($date_array);
                      //print_r($date_array);

                    ?>

                </div>

            </div>

        </div>





        <div id="ajax-response">

        </div>




</div>