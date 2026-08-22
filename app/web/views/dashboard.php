        <!-- Content-->
        <main class="content">
          <div class="mb-3">
            <div class="d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center">
              <h1 class="h3 mb-2 mb-sm-0">Dashboard</h1>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                  <li class="breadcrumb-item"><a href="./index.php">PiruWamp</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                </ol>
              </nav>
            </div>
          </div>

          <!-- 4 Main Cards -->
          <div class="row g-4 mb-4">
            <div class="col-sm-6 col-xl-3">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col-auto">
                      <div class="stat stat-primary"><i class="bi bi-hdd-network"></i></div>
                    </div>
                    <div class="col text-end">
                      <h6 class="card-title text-body-secondary mb-1">Apache HTTP</h6>
                      <h2 class="h3 fw-bold mb-0">Puerto 80</h2>
                      <span class="badge bg-success-subtle text-success small mt-1">Online &bull; <?= htmlspecialchars($apacheVersion) ?></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-sm-6 col-xl-3">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col-auto">
                      <div class="stat stat-info"><i class="bi bi-filetype-php"></i></div>
                    </div>
                    <div class="col text-end">
                      <h6 class="card-title text-body-secondary mb-1">PHP Engine</h6>
                      <h2 class="h3 fw-bold mb-0"><?= $phpVersion ?></h2>
                      <span class="badge bg-info-subtle text-info small mt-1"><?= $phpArchitecture ?> &bull; <?= $phpHandler ?></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-sm-6 col-xl-3">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col-auto">
                      <div class="stat <?= $dbStatus ? "stat-success" : "stat-danger" ?>">
                        <i class="bi bi-database"></i>
                      </div>
                    </div>
                    <div class="col text-end">
                      <h6 class="card-title text-body-secondary mb-1">MariaDB SQL</h6>
                      <h2 class="h3 fw-bold mb-0">Puerto <?= $dbPort ?></h2>
                      <?php if ($dbStatus): ?>
                        <span class="badge bg-success-subtle text-success small mt-1">Conectado (<?= htmlspecialchars($dbVersion) ?>)</span>
                      <?php else: ?>
                        <span class="badge bg-danger-subtle text-danger small mt-1">Desconectado</span>
                      <?php endif; ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-sm-6 col-xl-3">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col-auto">
                      <div class="stat stat-warning"><i class="bi bi-table"></i></div>
                    </div>
                    <div class="col text-end">
                      <h6 class="card-title text-body-secondary mb-1">phpMyAdmin</h6>
                      <h2 class="h3 fw-bold mb-0">/phpmyadmin</h2>
                      <a href="<?= $pmaUrl ?>" target="_blank" class="btn btn-sm btn-outline-primary mt-1 py-0 px-2">Abrir</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Charts and Memory -->
          <div class="row g-4 mb-4">
            <div class="col-12 col-lg-7 d-flex">
              <div class="card flex-fill w-100">
                <div class="card-header d-flex justify-content-between align-items-center">
                  <h5 class="card-title mb-0">Estado de Recursos y Servidor</h5>
                  <span class="badge bg-success">Servidor Activo</span>
                </div>
                <div class="card-body py-4">
                  <div class="mb-3">
                    <div class="d-flex justify-content-between mb-1">
                      <span class="fw-bold">Almacenamiento en Servidor</span>
                      <span class="text-primary"><?= $diskPercent ?>% (<?= $memUsedGb ?> GB / <?= $memTotalGb ?> GB)</span>
                    </div>
                    <div class="progress" style="height: 8px">
                      <div class="progress-bar bg-primary" role="progressbar" style="width: <?= $diskPercent ?>%"></div>
                    </div>
                  </div>

                  <div class="row g-3 mt-2">
                    <div class="col-6">
                      <div class="p-3 bg-body-tertiary rounded border">
                        <div class="text-muted small">Limite de Memoria PHP</div>
                        <div class="h5 mb-0 fw-bold"><?= $memoryLimit ?></div>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="p-3 bg-body-tertiary rounded border">
                        <div class="text-muted small">Max Execution Time</div>
                        <div class="h5 mb-0 fw-bold"><?= $maxExecutionTime ?></div>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="p-3 bg-body-tertiary rounded border">
                        <div class="text-muted small">Upload Max Filesize</div>
                        <div class="h5 mb-0 fw-bold"><?= $uploadMaxFilesize ?></div>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="p-3 bg-body-tertiary rounded border">
                        <div class="text-muted small">Post Max Size</div>
                        <div class="h5 mb-0 fw-bold"><?= $postMaxSize ?></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-12 col-lg-5 d-flex">
              <div class="card flex-fill w-100">
                <div class="card-header">
                  <h5 class="card-title mb-0">Servicios y Componentes</h5>
                </div>
                <div class="card-body p-3">
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                      <span><i class="bi bi-hdd-network text-primary me-2"></i> Apache HTTP</span>
                      <span class="badge bg-success-subtle text-success">Puerto 80</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                      <span><i class="bi bi-database text-info me-2"></i> MariaDB Server</span>
                      <span class="badge bg-success-subtle text-success">Puerto 3306</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                      <span><i class="bi bi-table text-warning me-2"></i> phpMyAdmin</span>
                      <span class="badge bg-primary-subtle text-primary">v5.2.2</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                      <span><i class="bi bi-filetype-php text-success me-2"></i> PHP Extensions</span>
                      <span class="badge bg-secondary"><?= count($loadedExtensions) ?> activas</span>
                    </li>
                  </ul>
                  <div class="mt-3">
                    <a href="./index.php?view=system" class="btn btn-sm btn-outline-secondary w-100">
                      <i class="bi bi-terminal me-1"></i> Ver Registros del Sistema
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Latest Projects Table -->
          <div class="row">
            <div class="col-12 d-flex">
              <div class="card flex-fill">
                <div class="card-header d-flex justify-content-between align-items-center">
                  <h5 class="card-title mb-0">Mis Proyectos (<code>www/</code>)</h5>
                  <span class="badge bg-primary rounded-pill"><?= count($projects) ?> Sitios</span>
                </div>
                <div class="table-responsive">
                  <table class="table table-hover my-0 border-top">
                    <thead>
                      <tr>
                        <th>Nombre</th>
                        <th>Dominio VirtualHost</th>
                        <th>Tipo / Stack</th>
                        <th>Ruta Local</th>
                        <th class="text-end">Accion</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php if (empty($projects)): ?>
                        <tr>
                          <td colspan="5" class="text-center py-4 text-muted">
                            No hay proyectos en <code>www/</code>. Crea una carpeta para comenzar.
                          </td>
                        </tr>
                      <?php else: ?>
                        <?php foreach ($projects as $proj): ?>
                          <tr>
                            <td class="fw-bold">
                              <i class="bi <?= $proj["icon"] ?> <?= $proj["color"] ?> me-2"></i>
                              <?= htmlspecialchars($proj["name"]) ?>
                            </td>
                            <td>
                              <a href="<?= $proj["url"] ?>" target="_blank" class="fw-semibold">
                                <?= htmlspecialchars($proj["domain"]) ?> <i class="bi bi-box-arrow-up-right small"></i>
                              </a>
                            </td>
                            <td>
                              <span class="badge bg-secondary-subtle text-body border">
                                <?= htmlspecialchars($proj["framework"]) ?>
                              </span>
                            </td>
                            <td><code><?= htmlspecialchars($proj["path"]) ?></code></td>
                            <td class="text-end">
                              <a href="<?= $proj["url"] ?>" target="_blank" class="btn btn-sm btn-primary">
                                <i class="bi bi-box-arrow-up-right me-1"></i> Abrir
                              </a>
                            </td>
                          </tr>
                        <?php endforeach; ?>
                      <?php endif; ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </main>
