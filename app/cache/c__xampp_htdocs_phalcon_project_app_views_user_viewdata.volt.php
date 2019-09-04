<?php $v34211671511iterated = false; ?><?php $v34211671511iterator = $data; $v34211671511incr = 0; $v34211671511loop = new stdClass(); $v34211671511loop->self = &$v34211671511loop; $v34211671511loop->length = count($v34211671511iterator); $v34211671511loop->index = 1; $v34211671511loop->index0 = 1; $v34211671511loop->revindex = $v34211671511loop->length; $v34211671511loop->revindex0 = $v34211671511loop->length - 1; ?><?php foreach ($v34211671511iterator as $datas) { ?><?php $v34211671511loop->first = ($v34211671511incr == 0); $v34211671511loop->index = $v34211671511incr + 1; $v34211671511loop->index0 = $v34211671511incr; $v34211671511loop->revindex = $v34211671511loop->length - $v34211671511incr; $v34211671511loop->revindex0 = $v34211671511loop->length - ($v34211671511incr + 1); $v34211671511loop->last = ($v34211671511incr == ($v34211671511loop->length - 1)); ?><?php $v34211671511iterated = true; ?>
<?php if ($v34211671511loop->first) { ?>
<table border=1 align="center">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
        </tr>
    </thead>
<?php } ?>
    <tbody>
        <tr>
            <td><?= $datas->id_user ?></td>
            <td><?= $datas->nama_user ?></td>
            <td><?= $datas->email_user ?></td>
            <td> <a href="<?= $this->url->get('user/edit/' . $datas->id_user) ?>">Edit</a> </td>
            <td> <a href="<?= $this->url->get('user/hapus/' . $datas->id_user) ?>">Hapus</a> </td>
        </tr>
    </tbody>
<?php if ($v34211671511loop->last) { ?>
    </table>
<?php } ?>
<?php $v34211671511incr++; } if (!$v34211671511iterated) { ?>
    No Data
<?php } ?>