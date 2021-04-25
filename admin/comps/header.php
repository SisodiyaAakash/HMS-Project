<header class="side-nav">
      <div class="safearea">
        <div class="side-menus">
          <div class="logo menu-itm">
            <svg
              viewBox="0 0 40 37"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M19.941 30.9572C19.5781 23.9645 17.2791 12.1147 6.7658 3.8425L7.28688 9.95521C13.4153 15.6886 17.3151 22.9416 19.0611 31.6624H19.0316C17.5831 25.4459 13.4898 14.9231 1.99418 8.18033L2.33993 14.1523C9.67351 18.7596 14.7474 24.2453 18.1967 32.3685H18.1664C15.8437 27.4496 10.6526 19.5823 0 14.9946L0.390807 21.3782C9.98402 24.8776 13.1015 27.8665 19.8116 36.7402L19.8189 36.75H20.1811L20.1884 36.7394C20.8611 35.8287 21.519 34.9932 22.1392 34.2043H22.1531V34.1855C27.6064 27.2478 31.0016 24.5185 39.6092 21.3782L40 14.9946C29.3474 19.5823 24.1555 27.4496 21.8336 32.3685H21.8041C25.2534 24.2453 30.3273 18.7596 37.6601 14.1523L38.0058 8.18033C26.5094 14.9231 22.4178 25.4459 20.9684 31.6624H20.9389C22.6849 22.9416 26.5847 15.6886 32.7131 9.95521L33.235 3.8425C22.7201 12.1147 20.4228 23.9645 20.059 30.9572H19.941V30.9572Z"
                fill="white"
              />
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M25.7154 5.25086C25.7154 8.14802 23.1543 10.5002 20 10.5002C16.8465 10.5002 14.2861 8.14802 14.2861 5.25086C14.2861 2.3522 16.8465 0 20 0C23.1543 0 25.7154 2.3522 25.7154 5.25086"
                fill="white"
              />
            </svg>
          </div>
          <div class="menu-itm menu-list">
            <a href="dashboard.php" class="sm-itm <?php if($page_name == "dashboard") { echo "active"; } ?>">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                enable-background="new 0 0 24 24"
                viewBox="0 0 24 24"
              >
                <g>
                  <rect fill="none" height="24" width="24" />
                  <g>
                    <path
                      d="M19,3H5C3.9,3,3,3.9,3,5v14c0,1.1,0.9,2,2,2h14c1.1,0,2-0.9,2-2V5C21,3.9,20.1,3,19,3z M19,19H5V5h14V19z"
                    />
                    <rect height="5" width="2" x="7" y="12" />
                    <rect height="10" width="2" x="15" y="7" />
                    <rect height="3" width="2" x="11" y="14" />
                    <rect height="2" width="2" x="11" y="10" />
                  </g>
                </g>
              </svg>
              <h3 class="itm-name">Dashboard</h3>
            </a>
            <a href="appointment.php" class="sm-itm <?php if($page_name == "appointment") { echo "active"; } ?>">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path
                  d="M 5 0 L 5 4 L 7 4 L 7 0 Z M 17 0 L 17 4 L 19 4 L 19 0 Z M 1 3 C 0.449219 3 0 3.449219 0 4 L 0 7 C 0 7.550781 0.449219 8 1 8 L 1 24 L 23 24 L 23 8 C 23.550781 8 24 7.550781 24 7 L 24 4 C 24 3.449219 23.550781 3 23 3 L 20 3 L 20 5 L 16 5 L 16 3 L 8 3 L 8 5 L 4 5 L 4 3 Z M 3 8 L 21 8 L 21 22 L 3 22 Z M 5 10 L 5 12 L 7 12 L 7 10 Z M 9 10 L 9 12 L 11 12 L 11 10 Z M 13 10 L 13 12 L 15 12 L 15 10 Z M 17 10 L 17 12 L 19 12 L 19 10 Z M 5 14 L 5 16 L 7 16 L 7 14 Z M 9 14 L 9 16 L 11 16 L 11 14 Z M 13 14 L 13 16 L 15 16 L 15 14 Z M 17 14 L 17 16 L 19 16 L 19 14 Z M 5 18 L 5 20 L 7 20 L 7 18 Z M 9 18 L 9 20 L 11 20 L 11 18 Z M 13 18 L 13 20 L 15 20 L 15 18 Z M 17 18 L 17 20 L 19 20 L 19 18 Z"
                />
              </svg>
              <h3 class="itm-name">Appointments</h3>
            </a>

            <a href="medicine.php" class="sm-itm <?php if($page_name == "medicine") { echo "active"; } ?>">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path d="M0 0h24v24H0V0z" fill="none"/>
                <path d="M21 5h-2.64l1.14-3.14L17.15 1l-1.46 4H3v2l2 6-2 6v2h18v-2l-2-6 2-6V5zm-3.9 8.63L18.89 19H5.11l1.79-5.37.21-.63-.21-.63L5.11 7h13.78l-1.79 5.37-.21.63.21.63zM13 9h-2v3H8v2h3v3h2v-3h3v-2h-3z"/>
              </svg>
              <h3 class="itm-name">Medicine Lists</h3>
            </a>

            <a href="prescription.php" class="sm-itm <?php if($page_name == "prescription") { echo "active"; } ?>">
              <svg
                version="1.1"
                id="Capa_1"
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink"
                x="0px"
                y="0px"
                viewBox="0 0 512 512"
                style="enable-background: new 0 0 512 512"
                xml:space="preserve"
              >
                <path
                  d="M125.696,125.994c-5.52,0-10,4.48-10,10s4.48,10,10,10c5.52,0,10-4.48,10-10S131.216,125.994,125.696,125.994z"
                />
                <path
                  d="M215.691,312.984h-29.998v-29.998c0-5.522-4.478-10-10-10s-9.999,4.478-9.999,10v29.998h-29.998
                          c-5.522,0-10,4.478-10,9.999s4.478,10,10,10h29.998v29.998c0,5.522,4.478,10,9.999,10s10-4.478,10-10v-29.998h29.998
                          c5.522,0,10-4.478,10-10S221.214,312.984,215.691,312.984z"
                />
                <path
                  d="M485.578,321.984c-22.105-38.286-70.981-51.389-109.274-29.279l-40.618,23.45v-86.836c0-10.735-3.55-21.388-9.999-29.998
                              l-49.997-66.661v-28.386c11.638-4.128,19.999-15.242,19.999-28.279V29.998C295.687,13.457,282.23,0,265.689,0H85.698
                              C69.157,0,55.699,13.457,55.699,29.998v45.998c0,13.035,8.361,24.151,19.999,28.279v28.386l-50.001,66.665
                              c-6.446,8.606-9.996,19.258-9.996,29.993v193.66c0,27.569,22.429,49.997,49.997,49.997h160.702
                              c22.421,37.583,70.767,50.161,108.664,28.279L456.3,431.258C494.255,409.34,507.794,360.479,485.578,321.984z M75.698,29.998
                              c0-5.514,4.486-10,9.999-10h179.991c5.514,0,10,4.486,10,10v45.998c0,5.514-4.486,9.999-10,9.999H85.698
                              c-5.514,0-9.999-4.486-9.999-9.999V29.998z M41.701,211.319l51.996-69.326c1.298-1.73,2-3.836,2-6v-29.998h159.992v19.999h-89.995
                              c-5.522,0-10,4.478-10,10s4.478,10,10,10h94.995l48.993,65.322c3.202,4.275,5.191,9.39,5.792,14.674H35.913
                              C36.513,220.705,38.502,215.59,41.701,211.319z M65.699,452.977c-16.541,0-29.998-13.457-29.998-29.998v-10.099h181.675
                              c-3.171,12.965-3.15,26.813,0.481,40.098H65.699z M225.219,392.98H35.7V245.987h279.986V327.7l-60.619,35.002
                              C242.428,370.003,232.212,380.396,225.219,392.98z M325.066,483.935c-28.697,16.571-65.367,6.771-81.949-21.946
                              c-16.661-28.994-6.564-65.498,21.952-81.969l54.277-31.338l59.997,103.915L325.066,483.935z M446.3,413.939l-49.637,28.659
                              l-59.998-103.917l49.638-28.656c28.716-16.578,65.373-6.761,81.955,21.957C484.913,360.844,474.785,397.49,446.3,413.939z"
                />
              </svg>

              <h3 class="itm-name">Prescriptions</h3>
            </a>
            <a href="treatment.php" class="sm-itm <?php if($page_name == "treatment") { echo "active"; } ?>">
              <svg
                version="1.1"
                id="Capa_1"
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink"
                x="0px"
                y="0px"
                viewBox="0 0 420.8 420.8"
                style="enable-background: new 0 0 420.8 420.8"
                xml:space="preserve"
              >
                <path
                  d="M413.6,204H378c14.8-33.6,13.2-60.8,7.6-79.2c-9.6-32.8-42-68.4-90-68.4c-12.8,0-25.6,2.4-38.8,7.2
                          C234,72,218.8,81.2,212,86c-6.8-4.8-21.6-14-44.8-22.4c-13.2-4.8-26.4-7.2-38.8-7.2c-48,0-80.4,35.6-90,68.4
                          c-5.6,19.6-7.6,49.2,11.2,86.4H6.4c-3.6,0-6.4,2.8-6.4,6.4c0,3.6,2.8,6.4,6.4,6.4h50.8c2,3.6,4.4,7.2,7.2,10.8
                          c41.6,60,132,125.2,148.4,129.2v0.4c0,0,0.4,0,0.8-0.4c0.4,0,0.8,0,1.2,0v-0.4c14-6.8,100.8-62.8,146.4-129.2c4.4-6,8-12,11.2-18
                          h42c3.6,0,6.4-2.8,6.4-6.4C420.8,206.4,417.2,204,413.6,204z M349.6,227.6c-42.4,62-120.4,112-137.2,122.8
                          c-17.2-10.8-94.8-61.2-137.6-122.8c-0.8-1.2-1.6-2.4-2.4-3.6h58.8c2.4,0,4.8-1.2,6-3.6l26.8-52.8l42,107.6c0.8,2.4,3.6,4,6,4
                          c0,0,0,0,0.4,0c2.8,0,5.2-2,6-4.8l36.8-126l19.6,63.6c0.8,2.4,2.8,4,5.2,4.4c2.4,0.4,4.8-0.8,6.4-2.8l15.6-22.8l13.2,22.4
                          c1.2,2,3.2,3.2,5.6,3.2h36C354.4,220.4,352,224,349.6,227.6z M364,204h-39.2l-16.4-28c-1.2-2-3.2-3.2-5.6-3.2
                          c-2.4,0-4.4,0.8-5.6,2.8l-13.6,20l-22-71.6c-0.8-2.8-3.6-4.4-6.4-4.8c-2.8,0-5.6,2-6.4,4.8l-37.2,128.4l-40.4-103.2
                          c-0.8-2.4-3.2-4-5.6-4c-2.8,0-4.8,1.2-6,3.6l-31.6,62H64.4c-16-29.2-20.4-57.2-13.2-82.4c8.4-28.4,36-58.8,77.6-58.8
                          c11.2,0,22.8,2.4,34.4,6.4c29.2,10.8,44.8,23.2,45.2,23.2c2.4,2,5.6,2,8,0c0,0,15.6-12.4,45.2-23.2c11.6-4.4,23.2-6.4,34.4-6.4
                          c41.2,0,69.2,30.4,77.6,58.8C380.4,151.6,376.8,177.2,364,204z"
                />
              </svg>
              <h3 class="itm-name">Treatments</h3>
            </a>
            <a href="doctors.php" class="sm-itm <?php if($page_name == "doctors") { echo "active"; } ?>">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                id="Icons"
                viewBox="0 0 74 74"
              >
                <path
                  d="M36.975,41.077c-9.019-.294-11.182-8.016-11.645-10.509a3.915,3.915,0,0,1-2.193-1.393,4.407,4.407,0,0,1-.821-3,4.138,4.138,0,0,1,.976-3.217,3.026,3.026,0,0,1,.729-.55,15.905,15.905,0,0,1-2.37-9.034c1.044-7.46,7.056-8.186,8.939-8.228a8.815,8.815,0,0,1,3.169-2.337,11.168,11.168,0,0,1,7.179-.4c4.662,1.217,7.771,3.551,9.246,6.938,2.1,4.814.258,10.355-.8,12.843a3.063,3.063,0,0,1,1.092.627,4.011,4.011,0,0,1,1.116,3.361,4.4,4.4,0,0,1-.82,3,3.921,3.921,0,0,1-2.194,1.393C48.115,33.061,45.957,40.783,36.975,41.077ZM25.692,24.007a1.353,1.353,0,0,0-.966.344,2.383,2.383,0,0,0-.409,1.789,1.027,1.027,0,0,1-.007.2,2.469,2.469,0,0,0,.419,1.625,2.283,2.283,0,0,0,1.6.758,1,1,0,0,1,.879.908c.033.372.92,9.157,9.769,9.447,8.8-.29,9.691-9.075,9.724-9.449a1,1,0,0,1,.879-.906,2.281,2.281,0,0,0,1.6-.758,2.474,2.474,0,0,0,.419-1.633,1.047,1.047,0,0,1-.007-.194,2.383,2.383,0,0,0-.451-1.836,1.517,1.517,0,0,0-1.086-.284A1,1,0,0,1,47,22.559c.037-.07,3.7-7.022,1.346-12.425-1.219-2.792-3.88-4.741-7.911-5.793a9.159,9.159,0,0,0-5.873.3,6.725,6.725,0,0,0-2.694,2.108.991.991,0,0,1-.887.4c-.259-.021-6.382-.417-7.342,6.428h0s-.277,5.445,2.877,8.745a1,1,0,0,1,.19,1.1.947.947,0,0,1-.947.591Z"
                />
                <path
                  d="M47.881,24.031a1,1,0,0,1-1-.958c-.012-.259-.322-6.3-4.832-6.881a15.226,15.226,0,0,1-11.613-3.364c-1.275.959-4.213,3.874-3.648,10.091A1,1,0,0,1,24.8,23.1c-.829-9.121,5.028-12.287,5.277-12.417a1,1,0,0,1,1.154.164A13.355,13.355,0,0,0,41.857,14.2a1.118,1.118,0,0,1,.277-.01c5.084.529,6.637,5.991,6.747,8.8a1,1,0,0,1-.958,1.038Z"
                />
                <path
                  d="M65.089,72H8.911a1,1,0,0,1-1-1V59.852a13.308,13.308,0,0,1,13.3-13.281h1.92a1,1,0,1,1,0,2h-1.92a11.306,11.306,0,0,0-11.3,11.281V70H64.089V59.852A11.294,11.294,0,0,0,52.808,48.571H50.75a1,1,0,0,1,0-2h2.058A13.3,13.3,0,0,1,66.089,59.852V71A1,1,0,0,1,65.089,72Z"
                />
                <path
                  d="M40.342,72a1,1,0,0,1-.989-1.149L43.4,44.068a1,1,0,0,1,1.277-.808l6.984,2.105a1,1,0,0,1,.608,1.4l-2.776,5.57,1.61,1.807a1,1,0,0,1,.1,1.191L41.192,71.526A1,1,0,0,1,40.342,72Zm4.864-26.492L42.061,66.321l7.053-11.4-1.563-1.755a1,1,0,0,1-.149-1.111l2.548-5.114Z"
                />
                <path
                  d="M33.543,72a1,1,0,0,1-.851-.474L22.678,55.336a1,1,0,0,1,.1-1.191l1.61-1.807-2.776-5.57a1,1,0,0,1,.608-1.4l6.984-2.105a1,1,0,0,1,1.276.808l4.049,26.783A1,1,0,0,1,33.543,72ZM24.771,54.918l7.053,11.4L28.679,45.508l-4.744,1.43,2.547,5.114a1,1,0,0,1-.148,1.111Z"
                />
                <path
                  d="M37.017,53.355a54.215,54.215,0,0,1-6.469-.392,1,1,0,1,1,.238-1.985,50.417,50.417,0,0,0,12.307,0,1,1,0,0,1,.25,1.984A50.5,50.5,0,0,1,37.017,53.355Z"
                />
                <path
                  d="M44.391,45.217a1,1,0,0,1-.8-.405c-1.486-2.009-1.755-5.991-1.78-6.438a1,1,0,0,1,.94-1.056,1.011,1.011,0,0,1,1.056.94c.061,1.052.431,4.067,1.391,5.365a1,1,0,0,1-.8,1.594Z"
                />
                <path
                  d="M29.494,45.217a1,1,0,0,1-.8-1.594c.962-1.3,1.331-4.314,1.392-5.365a1,1,0,1,1,2,.116c-.025.447-.3,4.429-1.78,6.438A1,1,0,0,1,29.494,45.217Z"
                />
                <path
                  d="M57.155,57.984a1,1,0,0,1-1-.971c-.187-6.512-2.663-8.561-2.687-8.581a1.007,1.007,0,0,1-.174-1.4.994.994,0,0,1,1.385-.192c.132.1,3.257,2.527,3.476,10.115a1,1,0,0,1-.97,1.028Z"
                />
                <path
                  d="M57.16,63.888a3.953,3.953,0,1,1,3.952-3.953A3.957,3.957,0,0,1,57.16,63.888Zm0-5.906a1.953,1.953,0,1,0,1.952,1.953A1.955,1.955,0,0,0,57.16,57.982Z"
                />
                <path
                  d="M16.082,57.984a1,1,0,0,1-1-.929c-.545-7.675,3.684-10.128,3.864-10.229a1,1,0,0,1,.983,1.742c-.152.09-3.3,2.033-2.853,8.346a1,1,0,0,1-.927,1.068Z"
                />
                <path
                  d="M14.059,65.991a1,1,0,0,1-.8-.394A6.251,6.251,0,0,1,12.2,63.449a6.012,6.012,0,0,1,3.929-7.492,5.6,5.6,0,0,1,4.3.532,6.418,6.418,0,0,1,3.12,6.612,1,1,0,0,1-1.973-.328,4.422,4.422,0,0,0-2.126-4.54,3.619,3.619,0,0,0-2.778-.353,4.014,4.014,0,0,0-2.548,5.036,4.267,4.267,0,0,0,.726,1.47,1,1,0,0,1-.795,1.605Z"
                />
                <path
                  d="M22.576,63.939c-.039,0-.079,0-.119-.006L21.33,63.8a1,1,0,0,1,.236-1.987l1.127.134a1,1,0,0,1-.117,1.993Z"
                />
                <path
                  d="M14.059,66a1,1,0,0,1-.348-1.938l1.2-.443a1,1,0,0,1,.7,1.875l-1.2.444A1,1,0,0,1,14.059,66Z"
                />
              </svg>
              <h3 class="itm-name">Doctors</h3>
            </a>
            <a href="admins.php" class="sm-itm <?php if($page_name == "admins") { echo "active"; } ?>">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                enable-background="new 0 0 24 24"
                viewBox="0 0 24 24"
              >
                <g>
                  <rect fill="none" height="24" width="24" />
                </g>
                <g>
                  <path
                    d="M20,9V6h-2v3h-3v2h3v3h2v-3h3V9H20z M9,12c2.21,0,4-1.79,4-4c0-2.21-1.79-4-4-4S5,5.79,5,8C5,10.21,6.79,12,9,12z M9,6 c1.1,0,2,0.9,2,2c0,1.1-0.9,2-2,2S7,9.1,7,8C7,6.9,7.9,6,9,6z M15.39,14.56C13.71,13.7,11.53,13,9,13c-2.53,0-4.71,0.7-6.39,1.56 C1.61,15.07,1,16.1,1,17.22V20h16v-2.78C17,16.1,16.39,15.07,15.39,14.56z M15,18H3v-0.78c0-0.38,0.2-0.72,0.52-0.88 C4.71,15.73,6.63,15,9,15c2.37,0,4.29,0.73,5.48,1.34C14.8,16.5,15,16.84,15,17.22V18z"
                  />
                </g>
              </svg>
              <h3 class="itm-name">Add Admin</h3>
            </a>
            <a href="department.php" class="sm-itm <?php if($page_name == "department") { echo "active"; } ?>">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path d="M0 0h24v24H0V0z" fill="none"/>
                <path d="M12 7V3H2v18h20V7H12zM6 19H4v-2h2v2zm0-4H4v-2h2v2zm0-4H4V9h2v2zm0-4H4V5h2v2zm4 12H8v-2h2v2zm0-4H8v-2h2v2zm0-4H8V9h2v2zm0-4H8V5h2v2zm10 12h-8v-2h2v-2h-2v-2h2v-2h-2V9h8v10zm-2-8h-2v2h2v-2zm0 4h-2v2h2v-2z"/>
              </svg>
              <h3 class="itm-name">Departments</h3>
            </a>
            
            <a href="states.php" class="sm-itm <?php if($page_name == "states") { echo "active"; } ?>">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path d="M0 0h24v24H0V0z" fill="none"/>
                <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zM7 9c0-2.76 2.24-5 5-5s5 2.24 5 5c0 2.88-2.88 7.19-5 9.88C9.92 16.21 7 11.85 7 9z"/>
                <circle cx="12" cy="9" r="2.5"/>
              </svg>
              <h3 class="itm-name">States & Districts</h3>
            </a>

            <a href="profile.php" class="sm-itm <?php if($page_name == "admin_profile") { echo "active"; } ?>">
              <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 6c1.1 0 2 .9 2 2s-.9 2-2 2-2-.9-2-2 .9-2 2-2m0 10c2.7 0 5.8 1.29 6 2H6c.23-.72 3.31-2 6-2m0-12C9.79 4 8 5.79 8 8s1.79 4 4 4 4-1.79 4-4-1.79-4-4-4zm0 10c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/></svg>
              <h3 class="itm-name">Profile</h3>
            </a>

            <a href="/lib/logout.php" class="sm-itm">
              <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><g><path d="M0,0h24v24H0V0z" fill="none"/></g><g><path d="M17,8l-1.41,1.41L17.17,11H9v2h8.17l-1.58,1.58L17,16l4-4L17,8z M5,5h7V3H5C3.9,3,3,3.9,3,5v14c0,1.1,0.9,2,2,2h7v-2H5V5z"/></g></svg>
              <h3 class="itm-name">Logout</h3>
            </a>
          </div>
        </div>
      </div>
    </header>