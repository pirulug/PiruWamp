        <!-- Content: Services View -->
        <main class="content">
          <div class="mb-3">
            <div class="d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center">
              <h1 class="h3 mb-2 mb-sm-0">Gestor de Servicios</h1>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                  <li class="breadcrumb-item"><a href="./index.php">PiruWamp</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Servicios</li>
                </ol>
              </nav>
            </div>
          </div>

          <!-- Services Grid -->
          <div class="row g-4 mb-4">
            <?php foreach ($services as $serv): ?>
              <div class="col-12 col-md-6 col-xl-3">
                <div class="card h-100">
                  <div class="card-body">
                    <div class="d-flex align-items-center gap-3 mb-3">
                      <div class="stat" style="background-color: <?= $serv["bg"] ?>; color: #fff;">
                        <i class="bi <?= $serv["icon"] ?>"></i>
                      </div>
                      <div>
                        <h5 class="card-title mb-0"><?= htmlspecialchars($serv["name"]) ?></h5>
                        <span class="badge bg-secondary-subtle text-body border"><?= htmlspecialchars($serv["category"]) ?></span>
                      </div>
                    </div>
                    <p class="small text-muted mb-2">Estado: <span class="text-success">&bull; <?= htmlspecialchars($serv["status"]) ?></span></p>
                    <p class="small text-muted mb-3">Puerto / Handler: <code><?= htmlspecialchars($serv["port"]) ?></code></p>
                    <?php if (isset($serv["url"])): ?>
                      <a href="<?= $serv["url"] ?>" target="_blank" class="btn btn-sm btn-outline-primary w-100">
                        <i class="bi bi-box-arrow-up-right me-1"></i> Abrir Interfaz
                      </a>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          </div>

          <!-- MariaDB Databases Manager -->
          <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
              <h5 class="card-title mb-0"><i class="bi bi-database me-2 text-primary"></i>Bases de Datos MariaDB (<?= count($databasesList) ?>)</h5>
              <a href="<?= $pmaUrl ?>" target="_blank" class="btn btn-sm btn-primary">
                <i class="bi bi-database me-1"></i> Gestionar en phpMyAdmin
              </a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-hover align-middle">
                  <thead>
                    <tr>
                      <th>Base de Datos</th>
                      <th>Tamaño</th>
                      <th>Tablas</th>
                      <th class="text-end">Accion</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php if (empty($databasesList)): ?>
                      <tr>
                        <td colspan="4" class="text-center text-muted py-4">No se pudo conectar a MariaDB o no hay bases de datos.</td>
                      </tr>
                    <?php else: ?>
                      <?php foreach ($databasesList as $db): ?>
                        <tr>
                          <td class="fw-bold">
                            <i class="bi bi-database text-muted me-2"></i>
                            <?= htmlspecialchars($db["name"]) ?>
                          </td>
                          <td><?= $db["size_mb"] ?> MB</td>
                          <td><?= $db["tables"] ?> tablas</td>
                          <td class="text-end">
                            <a href="<?= $pmaUrl ?>index.php?route=/database/structure&db=<?= urlencode($db["name"]) ?>" target="_blank" class="btn btn-sm btn-outline-secondary">
                              <i class="bi bi-box-arrow-up-right me-1"></i> Explorar
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
        </main>
