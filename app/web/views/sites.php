        <!-- Content: Sites View -->
        <main class="content">
          <div class="mb-3">
            <div class="d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center">
              <h1 class="h3 mb-2 mb-sm-0">Mis Sitios y Proyectos</h1>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                  <li class="breadcrumb-item"><a href="./index.php">PiruWamp</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Sitios</li>
                </ol>
              </nav>
            </div>
          </div>

          <div class="row g-4">
            <?php if (empty($projects)): ?>
              <div class="col-12">
                <div class="card">
                  <div class="card-body text-center py-5">
                    <i class="bi bi-folder-plus display-4 text-muted mb-3 d-block"></i>
                    <h4>No se han encontrado proyectos en <code>www/</code></h4>
                    <p class="text-muted">Crea una nueva carpeta dentro del directorio <code>www/</code> y PiruWamp creara automaticamente su VirtualHost <code>.test</code>.</p>
                  </div>
                </div>
              </div>
            <?php else: ?>
              <?php foreach ($projects as $proj): ?>
                <div class="col-12 col-md-6 col-xl-4">
                  <div class="card h-100">
                    <div class="card-body">
                      <div class="d-flex justify-content-between align-items-start mb-3">
                        <div class="d-flex align-items-center gap-2">
                          <div class="stat stat-primary p-2 fs-4">
                            <i class="bi <?= $proj["icon"] ?>"></i>
                          </div>
                          <div>
                            <h5 class="card-title mb-0"><?= htmlspecialchars($proj["name"]) ?></h5>
                            <span class="badge bg-secondary-subtle text-body border mt-1"><?= htmlspecialchars($proj["framework"]) ?></span>
                          </div>
                        </div>
                        <span class="badge bg-success-subtle text-success">&bull; Activo</span>
                      </div>

                      <div class="mb-3">
                        <label class="form-label small text-muted mb-1">Dominio VirtualHost</label>
                        <div class="p-2 bg-body-tertiary rounded border font-monospace small">
                          <a href="<?= $proj["url"] ?>" target="_blank" class="text-decoration-none">
                            <?= htmlspecialchars($proj["domain"]) ?>
                          </a>
                        </div>
                      </div>

                      <div class="mb-3">
                        <label class="form-label small text-muted mb-1">Ruta en Disco</label>
                        <div class="p-2 bg-body-tertiary rounded border font-monospace small text-truncate">
                          <?= htmlspecialchars($proj["path"]) ?>
                        </div>
                      </div>

                      <div class="d-flex gap-2 mt-auto pt-2">
                        <a href="<?= $proj["url"] ?>" target="_blank" class="btn btn-sm btn-primary flex-fill">
                          <i class="bi bi-box-arrow-up-right me-1"></i> Abrir (.test)
                        </a>
                        <a href="<?= $proj["local_url"] ?>" target="_blank" class="btn btn-sm btn-outline-secondary" title="Abrir localhost/...">
                          <i class="bi bi-link"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              <?php endforeach; ?>
            <?php endif; ?>
          </div>
        </main>
