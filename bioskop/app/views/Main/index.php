<?php include 'app/views/_global/beforeContent.php'; ?>

        <!--CAROUSEL-->
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <!--<ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class=""></li>
            <li data-target="#myCarousel" data-slide-to="1" class=""></li>
            <li data-target="#myCarousel" data-slide-to="2" class="active"></li>
          </ol>-->
          <div class="carousel-inner" role="listbox">
            <article class="item">
              <img class="first-slide" src="<?php echo Configuration::BASE_URL; ?>assets/img/tgw.jpg" alt="Great wall of China">
              <div class="container">
                <div class="carousel-caption">
                  <h2>Veliki kineski zid</h2>
                  <p>S globalnom super zvezdom Metom Dejmonom u glavnoj ulozi, a pod rediteljskom palicom jednog od najvećih vizuelnih stilista našeg vremena, Džanga Jimoa („Heroj“, „Kuća letećih bodeža“), „Veliki kineski zid“ studija Legendary govori o elitnoj sili koja pravi hrabro uporište na jednoj od najpoznatijih svetskih građevina.</p>
                  <!--<p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>-->
                </div>
              </div>
            </article>
            <article class="item">
              <img class="second-slide" src="<?php echo Configuration::BASE_URL; ?>assets/img/asc.jpg" alt="Assassins Creed">
              <div class="container">
                <div class="carousel-caption">
                  <h2>Assassin's Creed</h2>
                  <p>Assassin's Creed je jedna od najuspešnijih akcionih igrica današnjice, a ovo je prvi film snimljen po njoj. Režiju potpisuje Džastin Kurcel, a uz Fasbendera igra i oskarovka Marion Kotjar, Majkl Kenet Vilijams i Džeremi Ajrons.</p>
                  <!--<p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>-->
                </div>
              </div>
            </article>
            <article class="item active">
              <img class="third-slide" src="<?php echo Configuration::BASE_URL; ?>assets/img/lala.jpg" alt="La la Land">
              <div class="container">
                <div class="carousel-caption">
                  <h2>La La Land</h2>
                  <p>Omiljeni filmski ljubavni par, Emma Stoun i Rajan Gosling su ponovno zajedno u priči o dvoje sanjara koji pokušavaju da uspeju u Los Anđelesu!</p>
                  <!--<p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>-->
                </div>
              </div>
            </article>
          </div>
          <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

        <div class="container white top">
            <div class="row dark">
                <h4 class="text-uppercase text-center">Rezervisite svoje karte</h4>
            </div>

            <div class="reserve">
                <form>
                    <div class="row">
                        <div class="col-xs-6 col-sm-3 form-group">
                            <label for="film">Izaberite film</label>
                            <select id="film" class="form-control">
                                <option>-- Izaberite film --</option>
                                <option value="Veliki kineski zid">Veliki kineski zid</option>
                                <option value="Assassins Creed">Assassins Creed</option>
                                <option value="La La Land">La La Land</option>
                            </select>
                        </div>
                        <div class="col-xs-6 col-sm-3 form-group specCase">
                            <label for="item">Izaberite datum</label>
                            <select id="item" class="form-control">
                              <option>Cetvrtak</option>
                              <option>Petak</option>
                            </select>
                        </div>
                        <div class="col-xs-6 col-sm-3 form-group specCase">
                            <label for="vremeProj">Vreme projekcije</label>
                            <select id="vremeProj" class="form-control">
                                <option value="18">18:30</option>
                                <option value="20">20:00</option>
                            </select>
                        </div>
                        <div class="col-xs-6 col-sm-3 form-group specCase">
                            <label for="brKarata">Broj karata</label>
                            <input type="number" id="brKarata" class="form-control" placeholder="Broj karata" min="0" max="3">
                        </div>
                    </div>
                    <p class="text-center"><button type="button" class="btn btn-success specCase" id="ticketRes" data-toggle="modal" data-target="#myModal">Rezervisi</button></p>
                </form>
                <!-- EXP -->
                <div class="plane specCase">
                  <div class="cockpit">
                    <h1>Izaberite sedista</h1>
                  </div>
                  <div class="exit exit--front fuselage"></div>
                    <ol class="cabin fuselage">
                      <li class="row.rowSpec row-1">
                        <ol class="seats" type="A">
                          <li class="seat">
                            <input type="checkbox" id="1A" />
                            <label for="1A" class="seatRB">1A</label>
                          </li>
                          <li class="seat">
                            <input type="checkbox" id="1B" />
                            <label for="1B" class="seatRB">1B</label>
                          </li>
                          <li class="seat">
                            <input type="checkbox" id="1C" />
                            <label for="1C" class="seatRB">1C</label>
                          </li>
                          <li class="seat">
                        <input type="checkbox" id="1D" />
                        <label for="1D" class="seatRB">1D</label>
                      </li>
                        <li class="seat">
                          <input type="checkbox" disabled id="1E" />
                          <label for="1E" class="seatRB">1E</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" id="1F" />
                          <label for="1F" class="seatRB">1F</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" id="1G" />
                          <label for="1G" class="seatRB">1G</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" id="1H" />
                          <label for="1H" class="seatRB">1H</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" id="1I" />
                          <label for="1I" class="seatRB">1I</label>
                        </li>
                      </ol>
                    </li>
                    <li class="row.rowSpec row-2">
                      <ol class="seats" type="A">
                        <li class="seat">
                          <input type="checkbox" id="2A" />
                          <label for="2A" class="seatRB">2A</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" id="2B" />
                          <label for="2B" class="seatRB">2B</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" id="2C" />
                          <label for="2C" class="seatRB">2C</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" id="2D" />
                          <label for="2D" class="seatRB">2D</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" id="2E" />
                          <label for="2E" class="seatRB">2E</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" id="2F" />
                          <label for="2F" class="seatRB">2F</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" id="2G" />
                          <label for="2G" class="seatRB">2G</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" id="2H" />
                          <label for="2H" class="seatRB">2H</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" id="2I" />
                          <label for="2I" class="seatRB">2I</label>
                        </li>
                      </ol>
                    </li>
                    <li class="row.rowSpec row-3">
                      <ol class="seats" type="A">
                        <li class="seat">
                          <input type="checkbox" id="3A" />
                          <label for="3A" class="seatRB">3A</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" id="3B" />
                          <label for="3B" class="seatRB">3B</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" id="3C" />
                          <label for="3C" class="seatRB">3C</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" id="3D" />
                          <label for="3D" class="seatRB">3D</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" id="3E" />
                          <label for="3E" class="seatRB">3E</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" id="3F" />
                          <label for="3F" class="seatRB">3F</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" id="3G" />
                          <label for="3G" class="seatRB">3G</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" id="3H" />
                          <label for="3H" class="seatRB">3H</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" id="3I" />
                          <label for="3I" class="seatRB">3I</label>
                        </li>
                      </ol>
                    </li>
                    <li class="row.rowSpec row-4">
                      <ol class="seats" type="A">
                        <li class="seat">
                          <input type="checkbox" id="4A" />
                          <label for="4A" class="seatRB">4A</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" id="4B" />
                          <label for="4B" class="seatRB">4B</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" id="4C" />
                          <label for="4C" class="seatRB">4C</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" id="4D" />
                          <label for="4D" class="seatRB">4D</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" id="4E" />
                          <label for="4E" class="seatRB">4E</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" disabled id="4F" />
                          <label for="4F" class="seatRB">4F</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" id="4G" />
                          <label for="4G" class="seatRB">4G</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" id="4H" />
                          <label for="4H" class="seatRB">4H</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" id="4I" />
                          <label for="4I" class="seatRB">4I</label>
                        </li>
                      </ol>
                    </li>
                    <li class="row.rowSpec row-5">
                      <ol class="seats" type="A">
                        <li class="seat">
                          <input type="checkbox" id="5A" />
                          <label for="5A" class="seatRB">5A</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" id="5B" />
                          <label for="5B" class="seatRB">5B</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" id="5C" />
                          <label for="5C" class="seatRB">5C</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" id="5D" />
                          <label for="5D" class="seatRB">5D</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" id="5E" />
                          <label for="5E" class="seatRB">5E</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" id="5F" />
                          <label for="5F" class="seatRB">5F</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" disabled id="5G" />
                          <label for="5G" class="seatRB">5G</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" id="5H" />
                          <label for="5H" class="seatRB">5H</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" id="5I" />
                          <label for="5I" class="seatRB">5I</label>
                        </li>
                      </ol>
                    </li>
                    <li class="row.rowSpec row-6">
                      <ol class="seats" type="A">
                        <li class="seat">
                          <input type="checkbox" id="6A" />
                          <label for="6A" class="seatRB">6A</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" id="6B" />
                          <label for="6B" class="seatRB">6B</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" id="6C" />
                          <label for="6C" class="seatRB">6C</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" disabled id="6D" />
                          <label for="6D" class="seatRB">6D</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" id="6E" />
                          <label for="6E" class="seatRB">6E</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" id="6F" />
                          <label for="6F" class="seatRB">6F</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" id="6G" />
                          <label for="6G" class="seatRB">6G</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" id="6H" />
                          <label for="6H" class="seatRB">6H</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" id="6I" />
                          <label for="6I" class="seatRB">6I</label>
                        </li>
                      </ol>
                    </li>
                    <li class="row.rowSpec row-7">
                      <ol class="seats" type="A">
                        <li class="seat">
                          <input type="checkbox" disabled id="7A" />
                          <label for="7A" class="seatRB">7A</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" id="7B" />
                          <label for="7B" class="seatRB">7B</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" id="7C" />
                          <label for="7C" class="seatRB">7C</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" id="7D" />
                          <label for="7D" class="seatRB">7D</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" id="7E" />
                          <label for="7E" class="seatRB">7E</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" id="7F" />
                          <label for="7F" class="seatRB">7F</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" id="7G" />
                          <label for="7G" class="seatRB">7G</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" id="7H" />
                          <label for="7H" class="seatRB">7H</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" id="7I" />
                          <label for="7I" class="seatRB">7I</label>
                        </li>
                      </ol>
                    </li>
                    <li class="row.rowSpec row-8">
                      <ol class="seats" type="A">
                        <li class="seat">
                          <input type="checkbox" id="8A" />
                          <label for="8A" class="seatRB">8A</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" disabled id="8B" />
                          <label for="8B" class="seatRB">8B</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" id="8C" />
                          <label for="8C" class="seatRB">8C</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" id="8D" />
                          <label for="8D" class="seatRB">8D</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" id="8E" />
                          <label for="8E" class="seatRB">8E</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" id="8F" />
                          <label for="8F" class="seatRB">8F</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" id="8G" />
                          <label for="8G" class="seatRB">8G</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" id="8H" />
                          <label for="8H" class="seatRB">8H</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" id="8I" />
                          <label for="8I" class="seatRB">8I</label>
                        </li>
                      </ol>
                    </li>
                    <li class="row.rowSpec row-9">
                      <ol class="seats" type="A">
                        <li class="seat">
                          <input type="checkbox" id="9A" />
                          <label for="9A" class="seatRB">9A</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" id="9B" />
                          <label for="9B" class="seatRB">9B</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" id="9C" />
                          <label for="9C" class="seatRB">9C</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" id="9D" />
                          <label for="9D" class="seatRB">9D</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" disabled id="9E" />
                          <label for="9E" class="seatRB">9E</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" id="9F" />
                          <label for="9F" class="seatRB">9F</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" id="9G" />
                          <label for="9G" class="seatRB">9G</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" disabled id="9H" />
                          <label for="9H" class="seatRB">9H</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" id="9I" />
                          <label for="9I" class="seatRB">9I</label>
                        </li>
                      </ol>
                    </li>
                </ol>
                <div class="exit exit--back fuselage"></div>
              </div>
            </div>
            <!-- Modal -->
            <div id="myModal" class="modal fade" role="dialog">
              <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div id="first">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Kontakt informacije</h4>
                      </div>
                      <div class="modal-body">
                        <form class="form-horizontal">
                          <div class="form-group">
                                <label for="ime" class="col-sm-3 control-label">Ime</label>
                                <div class="col-sm-9">
                                    <input type="text" id="ime" class="form-control" name="ime" required placeholder="Ime"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="prezime" class="col-sm-3 control-label">Prezime</label>
                                <div class="col-sm-9">
                                    <input type="text" id="prezime" class="form-control" name="prezime" required placeholder="Prezime"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="emailAdr" class="col-sm-3 control-label">Vaša e-mail adresa</label>
                                <div class="col-sm-9">
                                    <input type="email" id="emailAdr" class="form-control" name="email" required placeholder="Vaša e-mail adresa"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="phoneNum" class="col-sm-3 control-label">Kontakt telefon</label>
                                <div class="col-sm-9">
                                    <input type="text" id="phoneNum" class="form-control" name="phone" required placeholder="Kontakt telefon"/>
                                </div>
                            </div>
                          </form>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-success" id="conf">Pošalji</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal" id="ticketDismiss">Odustani</button>
                      </div>
                    </div>

                    <div id="second" style="display: none;">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Rezervacija uspešna</h4>
                      </div>
                      <div class="modal-body">
                        <p>Vaša rezervacija je uspešno sačuvana. Molimo, proverite vaš inbox.</p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-dismiss="modal" id="endOfRes">U redu</button>
                      </div>
                    </div>
                </div>

              </div>
            </div>
        </div>

        <div class="container white">
            <h4 class="text-uppercase text-center">Najgledaniji filmovi</h4>
            <hr>
            <div class="row">
                <article class="col-xs-6 col-sm-3">
                  <div class="hover">
                        <div>
                          <img src="<?php echo Configuration::BASE_URL; ?>assets/img/sw.jpg" alt="Star Wars ODMETNIK-1" class="img-responsive img-thumbnail">
                        </div>
                        <div class="hover-info">
                            <div class="hover-text">
                                <h4 class="text-uppercase text-center">
                                  <strong>ODMETNIK-1 – STAR WARS PRIČA</strong>
                                </h4>
                                <p>ODMETNIK-1 je potpuno nov STAR WARS samostalni film koji govori o događajima koji su se desili nešto pre radnje filma STAR WARS – NOVA NADA iz 1977. </p>
                                <p class="text-center"><a href="film.html">Vise o filmu</a></p>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="col-xs-6 col-sm-3">
                    <div class="hover">
                        <div>
                          <img src="<?php echo Configuration::BASE_URL; ?>assets/img/50.jpg" alt="50 Shades of Darker" class="img-responsive img-thumbnail">
                        </div>
                        <div class="hover-info">
                            <div class="hover-text">
                                <h4 class="text-uppercase text-center">
                                  <strong>PEDESET NIJANSI - MRAČNIJE</strong>
                                </h4>
                                <p>Džejmi Dornan i Dakota Džonson se vraćaju kao Kristijan Grej i Anastazija Stil u „Pedeset nijansi – Mračnije“, drugom nastavku svetskog bestselera i fenomena „Pedeset nijansi“. </p>
                                <p class="text-center"><a href="film.html">Vise o filmu</a></p>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="col-xs-6 col-sm-3">
                    <div class="hover">
                        <div>
                          <img src="<?php echo Configuration::BASE_URL; ?>assets/img/lav.jpg" alt="Lion" class="img-responsive img-thumbnail">
                        </div>
                        <div class="hover-info">
                            <div class="hover-text">
                                <h4 class="text-uppercase text-center">
                                  <strong>Lav</strong>
                                </h4>
                                <p>Drama Lion je film reditelja Garta Dejvisa, zasnovana na istinitoj priči i knjizi Saroa Brierlija, „A long Way Home“.</p>
                                <p class="text-center"><a href="film.html">Vise o filmu</a></p>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="col-xs-6 col-sm-3">
                    <div class="hover">
                        <div>
                          <img src="<?php echo Configuration::BASE_URL; ?>assets/img/pevajmo.jpg" alt="Sing" class="img-responsive img-thumbnail">
                        </div>
                        <div class="hover-info">
                            <div class="hover-text">
                                <h4 class="text-uppercase text-center">
                                  <strong>Pevajmo</strong>
                                </h4>
                                <p>Illumination je oduševio publiku širom sveta voljenim hitovima kao što su „Grozan ja“, „Loraks“, „Grozan ja 2“, i „Malci“, drugi po redu animirani film s najvećom zaradom u istoriji. </p>
                                <p class="text-center"><a href="film.html">Vise o filmu</a></p>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>

        <div class="container white marketing" id="vesti">

          <!-- START THE FEATURETTES -->

          <article class="row featurette">
            <div class="col-md-9">
              <h3 class="featurette-heading">Zona Zamfirova u bioskopu <span class="text-muted">od 27.01.2017.</span></h3>
              <p>Najgledaniji srpski film svih vremena “Zona Zamfirova” dobio je nastavak.</p>
                <p>Lepu Zone igra mlada Brankica Sebastijanović, dok je uloga Maneta pripala Milanu Vasiću. Skoro 15 godina nakon što je ekranizovana ova velika ljubavna saga, scenaristi Ivana i Miroslav Mitić napisali su priču o tome šta se dogodilo u braku čuvenog para dve godine nakon vjenčanja, režija je poverena Jugu Radivojeviću, a iza produkcije filma stoje Pink international i produkcija “Vrati se Zone”. Glavni protagonisti i njihova borba da sačuvaju brak i dalje su smešteni između 1905. i 1908. godine, a producent filma Miroslav Mitić, u čijoj produkciji je realizovana i prva Zona Zamfirova, ističe kako je kroz omiljenu ljubavnu priču dočarana lepota Srbije u tom periodu, ali i problemi sa kojima se suočavaju mladi bračni parovi... <a href="#">Vise</a></p>
            </div>
            <div class="col-md-3">
              <img class="img-responsive center-block" alt="Zona Zamfirova" src="<?php echo Configuration::BASE_URL; ?>assets/img/zz.png">
            </div>
          </article>

          <hr class="featurette-divider">

          <article class="row featurette">
            <div class="col-md-3">
                <img class="img-responsive center-block" alt="Labudovo Jezero" src="<?php echo Configuration::BASE_URL; ?>assets/img/lj.jpg">
            </div>
            <div class="col-md-9">
              <h3 class="featurette-heading">Labudovo Jezero <span class="text-muted">Boljsoj teatar</span></h3>
                <p>Kraljevska porodica i gosti su se okupili u palati na rođendanskoj proslavi princa Zigfrida. Na veličanstvenoj ceremoniji, Zigfrid se pojavljuje kao vitez: mlade devojke pokušavaju da pridobiju njegovu pažnju, pošto mora da izabere ženu za sebe tokom bala. Iznenada postaje svestan svojih budućih odgovornosti, te beži u noć i upoznaje čudno jato labudova na magičnom jezeru. </p>
                <p>Karte su u prodaji i mogu se kupiti po ceni od 1.300 dinara po predstavi. Kupovinom 4 ili više karata* za prikazivanje ostvarujete pravo na sniženu cenu karte od 1000 dinara za sezonu 2016/2017... <a href="#">Vise</a></p>
            </div>
          </article>

          <hr class="featurette-divider">

          <article class="row featurette">
            <div class="col-md-9">
              <h3 class="featurette-heading">U prodaji karte za film ODMETNIK-1 – STAR WARS PRIČA</h3>
              <p>Iz Lucasfilma stiže potpuno nova avantura epskih razmera ODMETNIK-1, prvi od STAR WARS samostalnih filmova.</p>
                <p>U vreme konflikta, grupa neočekivanih junaka ujediniće se u misiji da ukrade planove za Zvezdu smrti, najstrašnije oružje za uništenje koje poseduje Imperija. Ovaj ključni trenutak u Star Wars istoriji okupiće obične ljude koji su odabrali da rade izuzetne stvari i na taj način će postati deo nečeg što je veće od njih samih... <a href="#">Vise</a></p>
            </div>
            <div class="col-md-3">
              <img class="img-responsive center-block" alt="Star Wars ODMETNIK-1" src="<?php echo Configuration::BASE_URL; ?>assets/img/sw.jpg">
            </div>
          </article>
          <!-- /END THE FEATURETTES -->
        </div>

<?php include 'app/views/_global/afterContent.php'; ?>