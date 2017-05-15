        <div id="sequence" class="seq">
                <div class='seq-screen'>
                    <div class='skillsHeader'>
                      <h1 class='intro-1 wow fadeInDown text-center hidden-xs hidden-sm'><i class='fa fa-pie-chart'></i> My Skills</h1>
                    </div>          
              <ul class='seq-canvas'>


                <?php
                  $sql = 'SELECT * FROM skills where ID != 10';
                  $retval = mysql_query( $sql, $conn);


                  while($record = mysql_fetch_array($retval)) {

                      echo "
                          <li>
                            <div class='seq-model'>
                              <img data-seq src='data:image/jpeg;base64," .base64_encode($record['image']) . "' alt='" . $record['name'] . "' />
                            </div>

                            <div class='seq-title'>
                              <h2 data-seq>" . $record['name'] . "</h2>
                              " . $record['description'] . "
                            </div>
                          </li>             
                          ";
                    }
                ?>

            </ul>
                </div>

                <fieldset class='seq-nav' aria-controls='sequence' aria-label='Slider buttons'>
                  <button type='button' class='seq-prev' aria-label='Previous'>Previous</button>
                  <button type='button' class='seq-next' aria-label='Next'>Next</button>
                </fieldset>

                <ul role='navigation' aria-label='Pagination' class='seq-pagination' style='z-index:1050;'>


            <?php
                $sql = 'SELECT * FROM skills where ID != 10';
              $retval = mysql_query( $sql, $conn);

                while($record = mysql_fetch_array($retval)) {

                    echo "
                          <li><a href='#step" . $record['ID'] . "' rel='step" . $record['ID'] . "' title='Go to slide " . $record['ID'] . "'><img src='data:image/jpeg;base64," .base64_encode($record['thumbnail']) . "' /></a></li>

                        ";

                }
            ?>

          </ul> 
        </div>