<?php
	include_once 'header.php';
?>
	<style type="text/css">
		*, *:before, *:after {
		  box-sizing: border-box;
		  -webkit-font-smoothing: antialiased;
		  -moz-osx-font-smoothing: grayscale;
		}

		body {
		  font-size: 12px;
		}

		body, button, input {
		  font-family: 'Montserrat', sans-serif;
		  font-weight: 700;
		  letter-spacing: 1.4px;
		}


		.container {
		  flex: 0 1 700px;
		  margin: auto;
		  padding: 10px;
		}

		.screen {
		  position: relative;
		  background: #3e3e3e;
		  border-radius: 15px;
		}

		.screen:after {
		  content: '';
		  display: block;
		  position: absolute;
		  top: 0;
		  left: 20px;
		  right: 20px;
		  bottom: 0;
		  border-radius: 15px;
		  box-shadow: 0 20px 40px rgba(0, 0, 0, .4);
		  z-index: -1;
		}


		.screen-header-left {
		  margin-right: auto;
		}

		.screen-header-button {
		  display: inline-block;
		  width: 8px;
		  height: 8px;
		  margin-right: 3px;
		  border-radius: 8px;
		  background: white;
		}

		.screen-body {
		  display: flex;
		}

		.screen-body-item {
		  flex: 1;
		  padding: 50px;
		}

		.screen-body-item.left {
		  display: flex;
		  flex-direction: column;
		}

		.app-title {
		  display: flex;
		  flex-direction: column;
		  position: relative;
		  color: white;
		  font-size: 26px;
		}

		.app-title:after {
		  content: '';
		  display: block;
		  position: absolute;
		  left: 0;
		  bottom: -10px;
		  width: 25px;
		  height: 4px;
		  background: white;
		}

		.app-contact {
		  margin-top: auto;
		  font-size: 8px;
		  color: #888;
		}

		.app-form-group {
		  margin-bottom: 15px;
		}
		.app-form-group.message {
		  margin-top: 20px;
		}

		.app-form-group.buttons {
		  margin-bottom: 0;
		  text-align: right;
		}

		.app-form-control {
		  width: 100%;
		  padding: 10px 0;
		  background: none;
		  border: none;
		  border-bottom: 1px solid #666;
		  color: #ddd;
		  font-size: 14px;
		  text-transform: none;
		  outline: none;
		  transition: border-color .2s;
		}

		.app-form-control::placeholder {
		  color: #666;
		}

		.app-form-control:focus {
		  border-bottom-color: #ddd;
		}

		.app-form-button {
		  background: none;
		  border: none;
		  color: #ea1d6f;
		  font-size: 14px;
		  cursor: pointer;
		  outline: none;
		}

		.app-form-button:hover {
		  color: black;
		}

		.credits {
		  display: flex;
		  justify-content: center;
		  align-items: center;
		  margin-top: 20px;
		  color: #ffa4bd;
		  font-family: 'Roboto Condensed', sans-serif;
		  font-size: 16px;
		  font-weight: normal;
		}

		.credits-link {
		  display: flex;
		  align-items: center;
		  color: #fff;
		  font-weight: bold;
		  text-decoration: none;
		}

		.dribbble {
		  width: 20px;
		  height: 20px;
		  margin: 0 5px;
		}

		@media screen and (max-width: 520px) {
		  .screen-body {
		    flex-direction: column;
		  }

		  .screen-body-item.left {
		    margin-bottom: 30px;
		  }

		  .app-title {
		    flex-direction: row;
		  }

		  .app-title span {
		    margin-right: 12px;
		  }

		  .app-title:after {
		    display: none;
		  }
		}

		@media screen and (max-width: 600px) {
		  .screen-body {
		    padding: 40px;
		  }

		  .screen-body-item {
		    padding: 0;
		  }
		}

	</style>


			<div class="page-head" data-bg-image="https://www.htmlcsscolor.com/preview/gallery/797979.png">
				<div class="container">
					<h2 class="page-title">Prayer request</h2>
				</div>
			</div>

			<main class="main-content">
				<div class="fullwidth-block">
					<div class="container">
						<div class="background">
							<div class="container">
							    <div class="screen">
							      <div class="screen-body">
							        <div class="screen-body-item left">
							          <div class="app-title">
							            <span>REQUEST</span>
							            <span>PRAYER</span>
							          </div>
							          <div class="app-contact">CARMEL INFANT JESUS CHURCH</div>
							        </div>
							        <div class="screen-body-item">
							        <form id="contact-form-details">
							          <div class="app-form">
							            <div class="app-form-group">
							              <input class="app-form-control" name="user_name" placeholder="NAME">
							            </div>
							            <div class="app-form-group email">
							              <input class="app-form-control" name="user_email" placeholder="EMAIL">
							            </div>
							            <div class="app-form-group message">
							              <input class="app-form-control" name="message" placeholder="REASON FOR PRAYER REQUEST">
							            </div>
							            <div class="app-form-group buttons">
							              <input type="submit" value="SEND">
							            </div>
							          </div>
							        </form>
							        </div>
							      </div>
							    </div>
							</div>
						</div>
					</div>
				</div>
			</main> <!-- .main-content -->
			
	<?php
		include_once 'footer.php';
	?>