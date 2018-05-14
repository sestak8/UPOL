<?php require_once('admin/views/pages/admin_header.php'); ?>

  <header id="header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <h1>
            <span class="material-icons">class</span> Categories
            <small>Manage Categories</small>
          </h1>
        </div>        
      </div>
    </div>
  </header>

  <div class="container-fluid">
    <ul class="breadcrumb bg-dark text-white">
      <li class="breadcrumb-item active bg-dark text-white">Admin</li>
      <li class="breadcrumb-item active bg-dark text-white">Categories</li>
    </ul>
  </div>

  <main id="main">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-2">
          <div class="list-group">
            <a href="/admin/dashboard/" class="list-group-item text-dark ">
              <i class="material-icons">dashboard</i><span>Dashboard</span>
              <span class="badge card bg-dark text-white">1</span>
            </a>
            <a href="/admin/categories/" class="list-group-item active bg-dark">
              <i class="material-icons">class</i> <span>Categories</span>              
            </a>
            <a href="/admin/posts/" class="list-group-item text-dark">
              <i class="material-icons">description</i> <span>Posts</span>  
              <span class="badge card bg-dark text-white">33</span>            
            </a>
            <a href="/admin/users/" class="list-group-item text-dark">
              <i class="material-icons">people</i> <span>Users</span>
              <span class="badge card bg-dark text-white">203</span>
            </a>
          </div>
  
        </div>
      <div class="col-md-10">
        <!-- Website Overview -->
        <div class="card">
          <div class="card-header bg-dark text-white card-header-btn">
            <h3 class="inline-block">Categories</h3>

            <?php if (unserialize($_SESSION['current_user'])->rights == 'SA') { ?>
              <button class="btn btn-default bg-dark text-white" type="button" data-toggle="modal" data-target="#addPage">
                <i class="material-icons">note_add</i> Add New
              </button>
            <?php } ?>

            
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                <input class="form-control" type="text" placeholder="Filter Categories...">
              </div>
            </div>
            <br>
            <table class="table table-striped table-hover">
              <tr>
                <th>Name</th>
                <th>Parent Category</th>
                <th>Created</th>
                <th></th>
              </tr>
              <tr>
                <td>Europe</td>
                <td>World</td>
                <td>Dec 12, 2016</td>
                <td>
                  <a class="btn btn-default" href="/admin/edit/">Edit</a>
                  <a class="btn btn-danger" href="#">Delete</a>
                </td>
              </tr>
              <tr>
                <td>Europe</td>
                <td>World</td>
                <td>Dec 12, 2016</td>
                <td>
                  <a class="btn btn-default" href="/admin/edit/">Edit</a>
                  <a class="btn btn-danger" href="#">Delete</a>
                </td>
              </tr>
              <tr>
                <td>Europe</td>
                <td>World</td>
                <td>Dec 12, 2016</td>
                <td>
                  <a class="btn btn-default" href="/admin/edit/">Edit</a>
                  <a class="btn btn-danger" href="#">Delete</a>
                </td>
              </tr>
              <tr>
                <td>Europe</td>
                <td>World</td>
                <td>Dec 12, 2016</td>
                <td>
                  <a class="btn btn-default" href="/admin/edit/">Edit</a>
                  <a class="btn btn-danger" href="#">Delete</a>
                </td>
              </tr>
              <tr>
                <td>Europe</td>
                <td>World</td>
                <td>Dec 12, 2016</td>
                <td>
                  <a class="btn btn-default" href="/admin/edit/">Edit</a>
                  <a class="btn btn-danger" href="#">Delete</a>
                </td>
              </tr>
              <tr>
                <td>Europe</td>
                <td>World</td>
                <td>Dec 12, 2016</td>
                <td>
                  <a class="btn btn-default" href="/admin/edit/">Edit</a>
                  <a class="btn btn-danger" href="#">Delete</a>
                </td>
              </tr>
            </table>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>
<!-- Modals -->

<!-- Add Page -->
<div class="modal fade" id="addPage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form>
        <div class="modal-header">
          <h4 class="modal-title" id="myModalLabel">Add Category</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label>Category Name</label>
            <input type="text" class="form-control" placeholder="Name">
          </div>
          <div class="form-group">
            <label for="sel1">Parent Category:</label>
            <select class="form-control" id="sel1">
              <option>-None-</option>
              <option>World</option>
              <option>Sport</option>
              <option>Science</option>
              <option>Life</option>
            </select>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-dark">Save changes</button>
        </div>
      </form>
    </div>
  </div>
</div>


<script>
    CKEDITOR.replace('editor1', {
      language: 'en',
      // Define the toolbar: http://docs.ckeditor.com/ckeditor4/docs/#!/guide/dev_toolbar
      // The standard preset from CDN which we used as a base provides more features than we need.
      // Also by default it comes with a 2-line toolbar. Here we put all buttons in a single row.
      toolbar: [
        ['Undo', 'Redo'],
        ['Styles', 'Format'],
        ['Bold', 'Italic', 'Strike', '-', 'RemoveFormat'],
        ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent'],
        ['JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock', '-', 'Blockquote'],
        ['Link', 'Unlink'],
        ['Image', 'EmbedSemantic', 'Table'],
        ['Maximize'],
        ['Scayt']
      ],
      // Since we define all configuration options here, let's instruct CKEditor to not load config.js which it does by default.
      // One HTTP request less will result in a faster startup time.
      // For more information check http://docs.ckeditor.com/ckeditor4/docs/#!/api/CKEDITOR.config-cfg-customConfig
      customConfig: '',
      // Enabling extra plugins, available in the standard-all preset: http://ckeditor.com/presets-all
      extraPlugins: 'autoembed,embedsemantic,image2,uploadimage,justify,indentblock',
      /*********************** File management support ***********************/
      // In order to turn on support for file uploads, CKEditor has to be configured to use some server side
      // solution with file upload/management capabilities, like for example CKFinder.
      // For more information see http://docs.ckeditor.com/ckeditor4/docs/#!/guide/dev_ckfinder_integration
      // Uncomment and correct these lines after you setup your local CKFinder instance.
      // filebrowserBrowseUrl: '/ckfinder/ckfinder.html',
      //filebrowserUploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
      filebrowserUploadUrl: '/uploader/upload.php?command=QuickUpload&type=Files',
      /*********************** File management support ***********************/
      // Remove the default image plugin because image2, which offers captions for images, was enabled above.
      removePlugins: 'image',
      // Make the editing area bigger than default.
      height: 300,
      // This is optional, but will let us define multiple different styles for multiple editors using the same CSS file.
      bodyClass: 'article-editor',
      // Reduce the list of block elements listed in the Format dropdown to the most commonly used.
      format_tags: 'p;h1;h2;h3;pre',
      // Simplify the Image and Link dialog windows. The "Advanced" tab is not needed in most cases.
      removeDialogTabs: 'image:advanced;link:advanced',
      // Define the list of styles which should be available in the Styles dropdown list.
      // If the "class" attribute is used to style an element, make sure to define the style for the class in "mystyles.css"
      // (and on your website so that it rendered in the same way).
      // Note: by default CKEditor looks for styles.js file. Defining stylesSet inline (as below) stops CKEditor from loading
      // that file, which means one HTTP request less (and a faster startup).
      // For more information see http://docs.ckeditor.com/ckeditor4/docs/#!/guide/dev_styles
      stylesSet: [
        /* Inline Styles */
        { name: 'Marker', element: 'span', attributes: { 'class': 'marker' } },
        { name: 'Cited Work', element: 'cite' },
        { name: 'Inline Quotation', element: 'q' },
        /* Object Styles */
        {
          name: 'Special Container',
          element: 'div',
          styles: {
            padding: '5px 10px',
            background: '#eee',
            border: '1px solid #ccc'
          }
        },
        {
          name: 'Compact table',
          element: 'table',
          attributes: {
            cellpadding: '5',
            cellspacing: '0',
            border: '1',
            bordercolor: '#ccc'
          },
          styles: {
            'border-collapse': 'collapse'
          }
        },
        { name: 'Borderless Table', element: 'table', styles: { 'border-style': 'hidden', 'background-color': '#E6E6FA' } },
        { name: 'Square Bulleted List', element: 'ul', styles: { 'list-style-type': 'square' } },
        /* Widget Styles */
        // We use this one to style the brownie picture.
        { name: 'Illustration', type: 'widget', widget: 'image', attributes: { 'class': 'image-illustration' } },
        // Media embed
        { name: '240p', type: 'widget', widget: 'embedSemantic', attributes: { 'class': 'embed-240p' } },
        { name: '360p', type: 'widget', widget: 'embedSemantic', attributes: { 'class': 'embed-360p' } },
        { name: '480p', type: 'widget', widget: 'embedSemantic', attributes: { 'class': 'embed-480p' } },
        { name: '720p', type: 'widget', widget: 'embedSemantic', attributes: { 'class': 'embed-720p' } },
        { name: '1080p', type: 'widget', widget: 'embedSemantic', attributes: { 'class': 'embed-1080p' } }
      ]
    });
  </script>