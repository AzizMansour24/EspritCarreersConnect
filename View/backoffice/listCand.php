<?php
require_once '../../Controller/CandidatureC.php';

$candidatureController = new CandidatureC();
$listeCandidatures = $candidatureController->listCandidatures();
?>

<html>

<head>
<style>
        /* Styles pour les boutons de tri */
        .filter-buttons {
            margin-bottom: 20px;
        }
        .filter-buttons button {
            margin-right: 10px;
        }
    </style>
	<!-- Basic Page Info -->
	<meta charset="utf-8" />
	<title>backoff ecc</title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="vendors/images/apple-touch-iconecc.png" />
	<link rel="icon" type="image/png" sizes="32x32" href="vendors/images/favicon-32x32ecc.png" />
	<link rel="icon" type="image/png" sizes="16x16" href="vendors/images/favicon-16x16ecc.png" />

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet" />
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="vendors/styles/core.css" />
	<link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css" />
	<link rel="stylesheet" type="text/css" href="src/plugins/datatables/css/dataTables.bootstrap4.min.css" />
	<link rel="stylesheet" type="text/css" href="src/plugins/datatables/css/responsive.bootstrap4.min.css" />
	<link rel="stylesheet" type="text/css" href="vendors/styles/style.css" />

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-GBZ3SGGX85"></script>
	<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2973766580778258" crossorigin="anonymous"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag("js", new Date());

		gtag("config", "G-GBZ3SGGX85");
	</script>
	<!-- Google Tag Manager -->
	<script>
		(function(w, d, s, l, i) {
			w[l] = w[l] || [];
			w[l].push({
				"gtm.start": new Date().getTime(),
				event: "gtm.js"
			});
			var f = d.getElementsByTagName(s)[0],
				j = d.createElement(s),
				dl = l != "dataLayer" ? "&l=" + l : "";
			j.async = true;
			j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
			f.parentNode.insertBefore(j, f);
		})(window, document, "script", "dataLayer", "GTM-NXZMQSS");
	</script>
	<!-- End Google Tag Manager -->

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.16/jspdf.plugin.autotable.min.js"></script>
</head>

<body>



	<div class="header">
		<div class="header-left">
			<div class="menu-icon bi bi-list"></div>
			<div class="search-toggle-icon bi bi-search" data-toggle="header_search"></div>
			<div class="header-search">
				<form>
					<div class="form-group mb-0">
						<i class="dw dw-search2 search-icon"></i>
						<input type="text" class="form-control search-input" placeholder="Search Here" />
						<div class="dropdown">
							<a class="dropdown-toggle no-arrow" href="#" role="button" data-toggle="dropdown">
								<i class="ion-arrow-down-c"></i>
							</a>
							<div class="dropdown-menu dropdown-menu-right">
								<div class="form-group row">
									<label class="col-sm-12 col-md-2 col-form-label">From</label>
									<div class="col-sm-12 col-md-10">
										<input class="form-control form-control-sm form-control-line" type="text" />
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-12 col-md-2 col-form-label">To</label>
									<div class="col-sm-12 col-md-10">
										<input class="form-control form-control-sm form-control-line" type="text" />
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-12 col-md-2 col-form-label">Subject</label>
									<div class="col-sm-12 col-md-10">
										<input class="form-control form-control-sm form-control-line" type="text" />
									</div>
								</div>
								<div class="text-right">
									<button class="btn btn-primary">Search</button>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
		<div class="header-right">
			<div class="dashboard-setting user-notification">
				<div class="dropdown">
					<a class="dropdown-toggle no-arrow" href="javascript:;" data-toggle="right-sidebar">
						<i class="dw dw-settings2"></i>
					</a>
				</div>
			</div>
			<div class="user-notification">
				<div class="dropdown">
					<a class="dropdown-toggle no-arrow" href="#" role="button" data-toggle="dropdown">
						<i class="icon-copy dw dw-notification"></i>
						<span class="badge notification-active"></span>
					</a>
					<div class="dropdown-menu dropdown-menu-right">
						<div class="notification-list mx-h-350 customscroll">
							<ul>
								<li>
									<a href="#">
										<img src="vendors/images/img.jpg" alt="" />
										<h3>John Doe</h3>
										<p>
											Lorem ipsum dolor sit amet, consectetur adipisicing
											elit, sed...
										</p>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="vendors/images/photo1.jpg" alt="" />
										<h3>Lea R. Frith</h3>
										<p>
											Lorem ipsum dolor sit amet, consectetur adipisicing
											elit, sed...
										</p>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="vendors/images/photo2.jpg" alt="" />
										<h3>Erik L. Richards</h3>
										<p>
											Lorem ipsum dolor sit amet, consectetur adipisicing
											elit, sed...
										</p>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="vendors/images/photo3.jpg" alt="" />
										<h3>John Doe</h3>
										<p>
											Lorem ipsum dolor sit amet, consectetur adipisicing
											elit, sed...
										</p>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="vendors/images/photo4.jpg" alt="" />
										<h3>Renee I. Hansen</h3>
										<p>
											Lorem ipsum dolor sit amet, consectetur adipisicing
											elit, sed...
										</p>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="vendors/images/img.jpg" alt="" />
										<h3>Vicki M. Coleman</h3>
										<p>
											Lorem ipsum dolor sit amet, consectetur adipisicing
											elit, sed...
										</p>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="user-info-dropdown">
				<div class="dropdown">
					<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
						<span class="user-icon">
							<img src="vendors/images/photo1.jpg" alt="" />
						</span>
						<span class="user-name">ECC</span>
					</a>
					<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
						<a class="dropdown-item" href="profile.php"><i class="dw dw-user1"></i> Profile</a>
						<a class="dropdown-item" href="profile.php"><i class="dw dw-settings2"></i> Setting</a>
						<a class="dropdown-item" href="faq.php"><i class="dw dw-help"></i> Help</a>
						<a class="dropdown-item" href="login.php"><i class="dw dw-logout"></i> Log Out</a>
					</div>
				</div>
			</div>

		</div>
	</div>

	<div class="right-sidebar">
		<div class="sidebar-title">
			<h3 class="weight-600 font-16 text-blue">
				Layout Settings
				<span class="btn-block font-weight-400 font-12">User Interface Settings</span>
			</h3>
			<div class="close-sidebar" data-toggle="right-sidebar-close">
				<i class="icon-copy ion-close-round"></i>
			</div>
		</div>
		<div class="right-sidebar-body customscroll">
			<div class="right-sidebar-body-content">
				<h4 class="weight-600 font-18 pb-10">Header Background</h4>
				<div class="sidebar-btn-group pb-30 mb-10">
					<a href="javascript:void(0);" class="btn btn-outline-primary header-white active">White</a>
					<a href="javascript:void(0);" class="btn btn-outline-primary header-dark">Dark</a>
				</div>

				<h4 class="weight-600 font-18 pb-10">Sidebar Background</h4>
				<div class="sidebar-btn-group pb-30 mb-10">
					<a href="javascript:void(0);" class="btn btn-outline-primary sidebar-light">White</a>
					<a href="javascript:void(0);" class="btn btn-outline-primary sidebar-dark active">Dark</a>
				</div>

				<h4 class="weight-600 font-18 pb-10">Menu Dropdown Icon</h4>
				<div class="sidebar-radio-group pb-10 mb-10">
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebaricon-1" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-1" checked="" />
						<label class="custom-control-label" for="sidebaricon-1"><i class="fa fa-angle-down"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebaricon-2" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-2" />
						<label class="custom-control-label" for="sidebaricon-2"><i class="ion-plus-round"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebaricon-3" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-3" />
						<label class="custom-control-label" for="sidebaricon-3"><i class="fa fa-angle-double-right"></i></label>
					</div>
				</div>

				<h4 class="weight-600 font-18 pb-10">Menu List Icon</h4>
				<div class="sidebar-radio-group pb-30 mb-10">
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-1" name="menu-list-icon" class="custom-control-input" value="icon-list-style-1" checked="" />
						<label class="custom-control-label" for="sidebariconlist-1"><i class="ion-minus-round"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-2" name="menu-list-icon" class="custom-control-input" value="icon-list-style-2" />
						<label class="custom-control-label" for="sidebariconlist-2"><i class="fa fa-circle-o" aria-hidden="true"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-3" name="menu-list-icon" class="custom-control-input" value="icon-list-style-3" />
						<label class="custom-control-label" for="sidebariconlist-3"><i class="dw dw-check"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-4" name="menu-list-icon" class="custom-control-input" value="icon-list-style-4" checked="" />
						<label class="custom-control-label" for="sidebariconlist-4"><i class="icon-copy dw dw-next-2"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-5" name="menu-list-icon" class="custom-control-input" value="icon-list-style-5" />
						<label class="custom-control-label" for="sidebariconlist-5"><i class="dw dw-fast-forward-1"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-6" name="menu-list-icon" class="custom-control-input" value="icon-list-style-6" />
						<label class="custom-control-label" for="sidebariconlist-6"><i class="dw dw-next"></i></label>
					</div>
				</div>

				<div class="reset-options pt-30 text-center">
					<button class="btn btn-danger" id="reset-settings">
						Reset Settings
					</button>
				</div>
			</div>
		</div>
	</div>

	<div class="left-side-bar">
		<div class="brand-logo">
			<a href="index.php">
				<img src="vendors/images/deskapp-logoecc.svg" alt="" class="dark-logo" />
				<img src="vendors/images/deskapp-logo-whiteecc.svg" alt="" class="light-logo" />
			</a>
			<div class="close-sidebar" data-toggle="left-sidebar-close">
				<i class="ion-close-round"></i>
			</div>
		</div>
		<div class="menu-block customscroll">
			<div class="sidebar-menu">
				<ul id="accordion-menu">


					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon bi bi-file-earmark-text"></span><span class="mtext">Additional Pages</span>
						</a>
						<ul class="submenu">
							<li><a href="busers.php">utilisateur</a></li>
							<li><a href="listOfr.php">offre d'emploi</a></li>
							<li><a href="login.php">stage</a></li>
							<li><a href="forgot-password.php">connexion</a></li>
							<li><a href="reset-password.php">Reset Password</a></li>
						</ul>
					</li>


					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon bi bi-back"></span><span class="mtext">Extra Pages</span>
						</a>
						<ul class="submenu">
							<li><a href="blank.php">Blank</a></li>
							<li><a href="contact-directory.php">Contact Directory</a></li>
							<li><a href="blog.php">Blog</a></li>
							<li><a href="blog-detail.php">Blog Detail</a></li>
							<li><a href="product.php">Product</a></li>
							<li><a href="product-detail.php">Product Detail</a></li>
							<li><a href="faq.php">FAQ</a></li>
							<li><a href="profile.php">Profile</a></li>
							<li><a href="gallery.php">Gallery</a></li>
							<li><a href="pricing-table.php">Pricing Tables</a></li>
						</ul>
					</li>

					<li>
						<a href="sitemap.php" class="dropdown-toggle no-arrow">
							<span class="micon bi bi-diagram-3"></span><span class="mtext">Sitemap</span>
						</a>
					</li>
					<li>
						<a href="chat.php" class="dropdown-toggle no-arrow">
							<span class="micon bi bi-chat-right-dots"></span><span class="mtext">Chat</span>
						</a>
					</li>
					<li>
						<a href="invoice.php" class="dropdown-toggle no-arrow">
							<span class="micon bi bi-receipt-cutoff"></span><span class="mtext">Invoice</span>
						</a>
					</li>
					<li>
						<div class="dropdown-divider"></div>
					</li>
					>

				</ul>
			</div>
		</div>
	</div>
	<div class="mobile-menu-overlay"></div>

	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="row">
					<div class="col-md-6 col-sm-12">
						
						<nav aria-label="breadcrumb" role="navigation">
							<ol class="breadcrumb">
								<li class="breadcrumb-item">
									<a href="index.php">Acceuil</a>
								</li>
								<li class="breadcrumb-item" aria-current="page">
								<a href="listOfr.php">Offre d'Emplois</a>
								</li>
                                <li class="breadcrumb-item active" aria-current="page">
								Candidatures
								</li>
							</ol>
						</nav>
					</div>
					
				</div>
			</div>
			<!-- Simple Datatable start -->
			<div class="card-box mb-30">
				<div class="pd-20">
					<h4 class="text-blue h4">Candiatures</h4>

				</div>
				<div class="pb-20">
					<table class="data-table table stripe hover nowrap">
						<div class="dt-buttons btn-group flex-wrap"> 
							<a href="listOfr.php" class="btn btn-secondary buttons-copy buttons-html5" tabindex="0" aria-controls="DataTables_Table_2" type="button">
								<span>Offre D'emplois</span>
							</a> 
							<button class="btn btn-secondary buttons-pdf buttons-html5" tabindex="0" type="button" id="pdf2Button">
    							<span>PDF</span>
							</button> 
						</div>
									
						<thead>
							<tr>
							
                            <th>ID</th>
                            <th>Offre ID</th>
                            <th>User ID</th>
                            <th>Date de candidature</th>
                            <th>Lettre de motivation</th>
                            <th>CV</th>
                            <th>Statut</th>


								<th class="datatable-nosort">Actions</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach($listeCandidatures as $candidature) { ?>
								<tr>

								<tr>
								
                                <td><?= $candidature['candidature_id']; ?></td>
                                <td><?= $candidature['offre_id']; ?></td>
                                <td><?= $candidature['user_id']; ?></td>
                                <td><?= $candidature['date_candidature']; ?></td>
                                <td><?= $candidature['lettre_motivation']; ?></td>
                                <td><?= $candidature['cv_path']; ?></td>
                                <td><?= $candidature['statut']; ?></td>


									<td>
										<div class="dropdown">
											<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
												<i class="dw dw-more"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
											<?php if ($candidature['statut'] === 'en attente') { ?>	
                                            <a href="UpdateCand.php?candidature_id=<?= $candidature['candidature_id']; ?>" class="dropdown-item">
  						 						 <i class="dw dw-edit2"></i> Affecter
												</a>
                                                <?php } ?>
												<a href="DeleteCand.php?candidature_id=<?= $candidature['candidature_id']; ?>" onclick="return confirm('Are you sure you want to delete?');" class="dropdown-item">
   												 <i class="dw dw-delete-3"></i> Supprimer
												</a>

											</div>
										</div>
									</td>
								</tr>

						</tbody>
					<?php } ?>
					</table>
				</div>
			</div>
		</div>
	</div>
	</div>
	<!-- welcome modal start -->


	<!-- welcome modal end -->
	<!-- js -->
	<script src="vendors/scripts/core.js"></script>
	<script src="vendors/scripts/script.min.js"></script>
	<script src="vendors/scripts/process.js"></script>
	<script src="vendors/scripts/layout-settings.js"></script>
	<script src="src/plugins/apexcharts/apexcharts.min.js"></script>
	<script src="src/plugins/datatables/js/jquery.dataTables.min.js"></script>
	<script src="src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
	<script src="src/plugins/datatables/js/dataTables.responsive.min.js"></script>
	<script src="src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
	<script src="vendors/scripts/dashboard3.js"></script>
	
	<!-- buttons for Export datatable -->
	<script src="src/plugins/datatables/js/dataTables.buttons.min.js"></script>
		<script src="src/plugins/datatables/js/buttons.bootstrap4.min.js"></script>
		<script src="src/plugins/datatables/js/buttons.print.min.js"></script>
		<script src="src/plugins/datatables/js/buttons.html5.min.js"></script>
		<script src="src/plugins/datatables/js/buttons.flash.min.js"></script>
		<script src="src/plugins/datatables/js/pdfmake.min.js"></script>
		<script src="src/plugins/datatables/js/vfs_fonts.js"></script>

		<script>
    document.addEventListener("DOMContentLoaded", function () {
        const pdf2Button = document.getElementById("pdf2Button");

        if (pdf2Button) {
            pdf2Button.addEventListener("click", function () {
                try {
					const{jsPDF}=window.jspdf;
                    const doc = new jsPDF();
                    const table = document.querySelector(".data-table");

                    if (table) {
                        doc.autoTable({ html: table });

                        // Télécharger le PDF avec le nom 'listeOFFRES.pdf'
                        doc.save("listeCANDIDATURES.pdf");
                    } else {
                        console.error("Tableau introuvable pour générer le PDF");
                    }
                } catch (error) {
                    console.error("Erreur lors de la génération du PDF : ", error);
                }
            });
        } else {
            console.error("Bouton PDF2 non trouvé");
        }
    });
</script>
</body>

</html>