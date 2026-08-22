        <!-- Content: System View -->
        <main class="content">
          <div class="mb-3">
            <div class="d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center">
              <h1 class="h3 mb-2 mb-sm-0">Sistema y Registros en Vivo</h1>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                  <li class="breadcrumb-item"><a href="./index.php">PiruWamp</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Sistema</li>
                </ol>
              </nav>
            </div>
          </div>

          <div class="row g-4 mb-4">
            <!-- PHP Modules -->
            <div class="col-12 col-lg-5">
              <div class="card h-100">
                <div class="card-header d-flex justify-content-between align-items-center">
                  <h5 class="card-title mb-0"><i class="bi bi-puzzle me-2 text-info"></i>Extensiones PHP (<?= count($loadedExtensions) ?>)</h5>
                  <a href="./index.php?action=phpinfo" target="_blank" class="btn btn-sm btn-outline-info">phpinfo()</a>
                </div>
                <div class="card-body p-0" style="max-height: 460px; overflow-y: auto;">
                  <ul class="list-group list-group-flush">
                    <?php foreach ($loadedExtensions as $ext): ?>
                      <li class="list-group-item d-flex justify-content-between align-items-center py-2">
                        <span class="font-monospace small"><?= htmlspecialchars($ext) ?></span>
                        <span class="badge bg-success-subtle text-success small"><i class="bi bi-check-lg"></i> Cargada</span>
                      </li>
                    <?php endforeach; ?>
                  </ul>
                </div>
              </div>
            </div>

            <!-- Live Logs Terminal -->
            <div class="col-12 col-lg-7">
              <div class="card h-100">
                <div class="card-header d-flex justify-content-between align-items-center">
                  <h5 class="card-title mb-0"><i class="bi bi-terminal me-2 text-danger"></i>Registros de Actividad (crash.log)</h5>
                  <button class="btn btn-sm btn-outline-secondary" onclick="location.reload()"><i class="bi bi-arrow-repeat me-1"></i> Refrescar</button>
                </div>
                <div class="card-body p-3">
                  <div class="p-3 bg-dark rounded border font-monospace text-light small" style="height: 430px; overflow-y: auto; line-height: 1.6;">
                    <?php if (empty($recentLogs)): ?>
                      <div class="text-muted">No se han registrado eventos o errores todavia.</div>
                    <?php else: ?>
                      <?php foreach ($recentLogs as $log): ?>
                        <div class="text-truncate text-secondary mb-1"><?= htmlspecialchars($log) ?></div>
                      <?php endforeach; ?>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </main>
