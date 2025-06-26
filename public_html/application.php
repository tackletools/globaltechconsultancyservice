<?php 
 include "components/header.php";
?>
    
    <style>
        /*:root {*/
        /*    --primary-color: #6366f1;*/
        /*    --primary-dark: #4f46e5;*/
        /*    --secondary-color: #f59e0b;*/
        /*    --accent-color: #06b6d4;*/
        /*    --dark-color: #0f172a;*/
        /*    --light-color: #f8fafc;*/
        /*    --gradient-primary: linear-gradient(135deg, #667eea 0%, #764ba2 100%);*/
        /*    --gradient-secondary: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);*/
        /*    --gradient-accent: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);*/
        /*}*/
        
        /** {*/
        /*    margin: 0;*/
        /*    padding: 0;*/
        /*    box-sizing: border-box;*/
        /*}*/
        
        /*body {*/
        /*    font-family: 'Inter', sans-serif;*/
        /*    line-height: 1.6;*/
        /*    overflow-x: hidden;*/
        /*    background: var(--light-color);*/
        /*}*/
        
        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }
        
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }
        
        ::-webkit-scrollbar-thumb {
            background: var(--primary-color);
            border-radius: 4px;
        }

        /* Page Title Section */
        .page-title {
            background: var(--gradient-primary);
            padding: 8rem 0 4rem;
            position: relative;
            overflow: hidden;
        }

        .page-title::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000"><polygon fill="%23ffffff08" points="0,0 1000,300 1000,1000 0,700"/></svg>');
            pointer-events: none;
        }

        .page-title h1 {
            font-size: clamp(2.5rem, 5vw, 4rem);
            font-weight: 700;
            color: white;
            text-align: center;
            margin-bottom: 1rem;
            position: relative;
            z-index: 2;
        }

        .page-title p {
            font-size: 1.25rem;
            color: rgba(255, 255, 255, 0.9);
            text-align: center;
            position: relative;
            z-index: 2;
        }

        /* Main Content Section */
        .app-category-area {
            padding: 6rem 0;
            position: relative;
        }

        /* Sidebar Styles */
        .sidebar {
            background: white;
            border-radius: 20px;
            padding: 2rem;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            position: sticky;
            top: 100px;
            height: fit-content;
        }

        .sidebar h3 {
            font-weight: 700;
            font-size: 1.5rem;
            margin-bottom: 2rem;
            background: var(--gradient-primary);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .cat-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .cat-list li {
            margin-bottom: 0.5rem;
        }

        .cat-list a {
            display: block;
            padding: 1rem 1.5rem;
            color: #64748b;
            text-decoration: none;
            border-radius: 12px;
            transition: all 0.3s ease;
            font-weight: 500;
            position: relative;
            overflow: hidden;
        }

        .cat-list a::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: var(--gradient-primary);
            transition: all 0.3s ease;
            z-index: -1;
        }

        .cat-list a:hover,
        .cat-list a.active {
            color: white;
            transform: translateX(10px);
        }

        .cat-list a:hover::before,
        .cat-list a.active::before {
            left: 0;
        }

        /* Search and View Toggle */
        .list-top {
            background: white;
            border-radius: 20px;
            padding: 2rem;
            margin-bottom: 3rem;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 1rem;
        }

        .app-search {
            position: relative;
            flex: 1;
            max-width: 500px;
        }

        .app-search input {
            width: 100%;
            padding: 1rem 1.5rem 1rem 3rem;
            border: 2px solid #e2e8f0;
            border-radius: 50px;
            font-size: 1rem;
            transition: all 0.3s ease;
            background: #f8fafc;
        }

        .app-search input:focus {
            outline: none;
            border-color: var(--primary-color);
            background: white;
            box-shadow: 0 0 0 4px rgba(99, 102, 241, 0.1);
        }

        .app-search .btn-search {
            position: absolute;
            left: 1rem;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            color: #64748b;
            font-size: 1.2rem;
        }

        .view-toggle {
            display: flex;
            gap: 0.5rem;
        }

        .view-toggle .btn {
            width: 50px;
            height: 50px;
            border-radius: 12px;
            border: 2px solid #e2e8f0;
            background: white;
            color: #64748b;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
        }

        .view-toggle .btn:hover,
        .view-toggle .btn.active {
            background: var(--primary-color);
            border-color: var(--primary-color);
            color: white;
            transform: translateY(-2px);
        }

        /* Application Grid */
        .portfolio--grid {
            margin-top: 2rem;
        }

        .app-item {
            margin-bottom: 2rem;
            transition: all 0.3s ease;
        }

        .app-item a {
            display: block;
            background: white;
            border-radius: 20px;
            padding: 2rem;
            text-decoration: none;
            color: inherit;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            height: 100%;
            border: 1px solid rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
        }

        .app-item a:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.15);
            color: inherit;
        }

        .app-item .title {
            display: flex;
            align-items: center;
            margin-bottom: 1.5rem;
        }

        .app-item .icon {
            width: 80px;
            height: 80px;
            border-radius: 16px;
            overflow: hidden;
            margin-right: 1.5rem;
            background: var(--gradient-primary);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .app-item .icon img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 16px;
        }

        .app-item .name {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--dark-color);
            margin-bottom: 0.5rem;
        }

        .app-item .label {
            display: inline-block;
            background: var(--gradient-primary);
            color: white;
            padding: 0.25rem 1rem;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 500;
        }

        .app-item .description {
            color: #64748b;
            line-height: 1.6;
            margin-top: 1rem;
        }

        /* List View Styles */
        .list-view .app-item a {
            display: flex;
            align-items: center;
            padding: 1.5rem 2rem;
        }

        .list-view .app-item .title {
            margin-bottom: 0;
            margin-right: 2rem;
            min-width: 300px;
        }

        .list-view .app-item .description {
            margin-top: 0;
            flex: 1;
        }

        /* Pagination */
        .pagination {
            display: flex;
            justify-content: center;
            align-items: center;
            list-style: none;
            padding: 0;
            margin: 4rem 0 0;
            gap: 0.5rem;
        }

        .pagination li {
            margin: 0;
        }

        .pagination a,
        .pagination span {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 50px;
            height: 50px;
            border-radius: 12px;
            text-decoration: none;
            color: #64748b;
            background: white;
            border: 2px solid #e2e8f0;
            transition: all 0.3s ease;
            font-weight: 500;
        }

        .pagination a:hover,
        .pagination .active a {
            background: var(--primary-color);
            border-color: var(--primary-color);
            color: white;
            transform: translateY(-2px);
        }

        .pagination .disabled span {
            opacity: 0.5;
            cursor: not-allowed;
        }

        /* Call to Action Section */
        .call-action {
            background: var(--gradient-primary);
            padding: 4rem 0;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .call-action::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000"><polygon fill="%23ffffff08" points="0,0 1000,300 1000,1000 0,700"/></svg>');
            pointer-events: none;
        }

        .call-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: white;
            margin-bottom: 2rem;
            position: relative;
            z-index: 2;
        }

        .call-action .btn {
            background: white;
            color: var(--primary-color);
            border: none;
            padding: 1rem 3rem;
            font-weight: 700;
            border-radius: 50px;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            position: relative;
            z-index: 2;
        }

        .call-action .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.2);
            color: var(--primary-color);
        }

        /* Responsive Design */
        @media (max-width: 991px) {
            .sidebar {
                margin-bottom: 3rem;
                position: relative;
                top: 0;
            }

            .list-top {
                flex-direction: column;
                align-items: stretch;
            }

            .app-search {
                max-width: none;
            }

            .list-view .app-item a {
                flex-direction: column;
                align-items: flex-start;
            }

            .list-view .app-item .title {
                margin-right: 0;
                margin-bottom: 1rem;
                min-width: auto;
                width: 100%;
            }
        }

        @media (max-width: 768px) {
            .page-title {
                padding: 6rem 0 3rem;
            }

            .app-category-area {
                padding: 3rem 0;
            }

            .call-title {
                font-size: 2rem;
            }
        }

        /* Animation utilities */
        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.6s ease;
        }

        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }
    </style>

    <!-- Page Title Section -->
    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="fade-in">Applications All-in-One Place</h1>
                    <p class="fade-in">Discover powerful tools and solutions designed to accelerate your business growth</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content Section -->
    <section class="app-category-area">
        <div class="container">
            <div class="row">
                <!-- Sidebar -->
                <div class="col-lg-4 col-xl-3">
                    <div class="sidebar fade-in">
                        <h3><i class="ri-apps-2-line me-2"></i>Categories</h3>
                        <ul class="cat-list">
                            <li><a href="#" class="active" data-category="all"><i class="ri-dashboard-line me-2"></i>All Applications</a></li>
                            <li><a href="#" data-category="devops"><i class="ri-settings-3-line me-2"></i>DevOps</a></li>
                            <li><a href="#" data-category="database"><i class="ri-database-2-line me-2"></i>Database</a></li>
                            <li><a href="#" data-category="document"><i class="ri-file-text-line me-2"></i>Document Applications</a></li>
                            <li><a href="#" data-category="analytics"><i class="ri-bar-chart-box-line me-2"></i>Data Management & Analytics</a></li>
                            <li><a href="#" data-category="project"><i class="ri-task-line me-2"></i>Project & Agile Management</a></li>
                            <li><a href="#" data-category="infrastructure"><i class="ri-server-line me-2"></i>Infrastructure & Network</a></li>
                            <li><a href="#" data-category="business"><i class="ri-briefcase-line me-2"></i>Business & Enterprise</a></li>
                            <li><a href="#" data-category="communication"><i class="ri-chat-3-line me-2"></i>Communication & Collaboration</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Main Content -->
                <div class="col-lg-8 col-xl-9">
                    <!-- Search and View Toggle -->
                    <div class="list-top fade-in">
                        <form class="app-search">
                            <button class="btn-search" type="submit">
                                <i class="ri-search-line"></i>
                            </button>
                            <input placeholder="Search for applications..." name="q" type="text" value="">
                        </form>
                        <div class="view-toggle">
                            <button id="grid-view-btn" class="btn active" onclick="toggleView('grid')">
                                <i class="ri-layout-grid-line"></i>
                            </button>
                            <button id="list-view-btn" class="btn" onclick="toggleView('list')">
                                <i class="ri-list-check"></i>
                            </button>
                        </div>
                    </div>

                    <!-- Applications Grid -->
                    <div id="content-area" class="grid-view">
                        <div class="portfolio--grid">
                            <div id="portfolio-list-view" class="row">
                                
                                <!-- OpenideaL -->
                                <div class="col-lg-6 col-xl-4 app-item fade-in" data-category="project">
                                    <a href="#">
                                        <div class="title">
                                            <div class="icon">
                                                <i class="ri-lightbulb-line" style="font-size: 2rem; color: white;"></i>
                                            </div>
                                            <div>
                                                <div class="name">OpenideaL</div>
                                                <span class="label">Project Management</span>
                                            </div>
                                        </div>
                                        <div class="description">
                                            Developed and owned by our parent company, Linnovate, this is the OpenideaL official release for innovative project management.
                                        </div>
                                    </a>
                                </div>

                                <!-- Memcached -->
                                <div class="col-lg-6 col-xl-4 app-item fade-in" data-category="database">
                                    <a href="#">
                                        <div class="title">
                                            <div class="icon">
                                                <i class="ri-database-2-line" style="font-size: 2rem; color: white;"></i>
                                            </div>
                                            <div>
                                                <div class="name">Memcached</div>
                                                <span class="label">Database</span>
                                            </div>
                                        </div>
                                        <div class="description">
                                            High-performance, distributed memory object caching system designed to speed up dynamic web applications by alleviating database load.
                                        </div>
                                    </a>
                                </div>

                                <!-- Kimai -->
                                <div class="col-lg-6 col-xl-4 app-item fade-in" data-category="project">
                                    <a href="#">
                                        <div class="title">
                                            <div class="icon">
                                                <i class="ri-time-line" style="font-size: 2rem; color: white;"></i>
                                            </div>
                                            <div>
                                                <div class="name">Kimai</div>
                                                <span class="label">Time Tracking</span>
                                            </div>
                                        </div>
                                        <div class="description">
                                            Open-source time tracking solution for freelancers, agencies and organizations who need to track their project times.
                                        </div>
                                    </a>
                                </div>

                                <!-- Kanboard -->
                                <div class="col-lg-6 col-xl-4 app-item fade-in" data-category="project">
                                    <a href="#">
                                        <div class="title">
                                            <div class="icon">
                                                <i class="ri-kanban-view" style="font-size: 2rem; color: white;"></i>
                                            </div>
                                            <div>
                                                <div class="name">Kanboard</div>
                                                <span class="label">Project Management</span>
                                            </div>
                                        </div>
                                        <div class="description">
                                            Free and open source Kanban project management software with a focus on simplicity and visual task management.
                                        </div>
                                    </a>
                                </div>

                                <!-- Apache Kafka -->
                                <div class="col-lg-6 col-xl-4 app-item fade-in" data-category="analytics">
                                    <a href="#">
                                        <div class="title">
                                            <div class="icon">
                                                <i class="ri-flow-chart" style="font-size: 2rem; color: white;"></i>
                                            </div>
                                            <div>
                                                <div class="name">Apache Kafka</div>
                                                <span class="label">Data Streaming</span>
                                            </div>
                                        </div>
                                        <div class="description">
                                            Distributed event store and stream-processing platform providing unified, high-throughput, low-latency platform for real-time data feeds.
                                        </div>
                                    </a>
                                </div>

                                <!-- Couchbase -->
                                <div class="col-lg-6 col-xl-4 app-item fade-in" data-category="database">
                                    <a href="#">
                                        <div class="title">
                                            <div class="icon">
                                                <i class="ri-database-line" style="font-size: 2rem; color: white;"></i>
                                            </div>
                                            <div>
                                                <div class="name">Couchbase</div>
                                                <span class="label">NoSQL Database</span>
                                            </div>
                                        </div>
                                        <div class="description">
                                            Open-source NoSQL database that combines document-oriented, key-value, and SQL-like querying capabilities.
                                        </div>
                                    </a>
                                </div>

                                <!-- Apache Solr -->
                                <div class="col-lg-6 col-xl-4 app-item fade-in" data-category="analytics">
                                    <a href="#">
                                        <div class="title">
                                            <div class="icon">
                                                <i class="ri-search-2-line" style="font-size: 2rem; color: white;"></i>
                                            </div>
                                            <div>
                                                <div class="name">Apache Solr</div>
                                                <span class="label">Search Platform</span>
                                            </div>
                                        </div>
                                        <div class="description">
                                            Open-source enterprise search platform that provides powerful and scalable way to search for information across large datasets.
                                        </div>
                                    </a>
                                </div>

                                <!-- Ansible -->
                                <div class="col-lg-6 col-xl-4 app-item fade-in" data-category="devops">
                                    <a href="#">
                                        <div class="title">
                                            <div class="icon">
                                                <i class="ri-settings-3-line" style="font-size: 2rem; color: white;"></i>
                                            </div>
                                            <div>
                                                <div class="name">Ansible</div>
                                                <span class="label">Automation</span>
                                            </div>
                                        </div>
                                        <div class="description">
                                            Open-source automation platform that automates provisioning, configuration, and deployment of infrastructure and applications.
                                        </div>
                                    </a>
                                </div>

                                <!-- Apache Hadoop -->
                                <div class="col-lg-6 col-xl-4 app-item fade-in" data-category="analytics">
                                    <a href="#">
                                        <div class="title">
                                            <div class="icon">
                                                <i class="ri-bar-chart-box-line" style="font-size: 2rem; color: white;"></i>
                                            </div>
                                            <div>
                                                <div class="name">Apache Hadoop</div>
                                                <span class="label">Big Data</span>
                                            </div>
                                        </div>
                                        <div class="description">
                                            Open-source distributed processing framework for processing and analyzing large datasets using MapReduce programming model.
                                        </div>
                                    </a>
                                </div>

                            </div>

                            <!-- Pagination -->
                            <ul class="pagination fade-in">
                                <li class="prev disabled"><span><i class="ri-arrow-left-line"></i></span></li>
                                <li class="active"><a href="#" data-page="1">1</a></li>
                                <li><a href="#" data-page="2">2</a></li>
                                <li><a href="#" data-page="3">3</a></li>
                                <li class="next"><a href="#" data-page="2"><i class="ri-arrow-right-line"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section class="call-action">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="call-title">Ready to discuss your requirements?</h3>
                    <div class="pad-btm5">
                        <a href="#" class="btn">
                            <i class="ri-message-3-line me-2"></i>Get in touch
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // View Toggle Functionality
        function toggleView(view) {
            const contentArea = document.getElementById('content-area');
            const gridViewBtn = document.getElementById('grid-view-btn');
            const listViewBtn = document.getElementById('list-view-btn');
            
            gridViewBtn.classList.remove('active');
            listViewBtn.classList.remove('active');
            
            if (view === 'grid') {
                contentArea.classList.remove('list-view');
                contentArea.classList.add('grid-view');
                gridViewBtn.classList.add('active');
            } else
<?php 
 include "components/footer.php";
?>