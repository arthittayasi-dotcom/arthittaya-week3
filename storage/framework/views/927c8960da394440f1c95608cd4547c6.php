<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel week-03</title>
    <style>body{font-family:system-ui,sans-serif;max-width:900px;margin:48px auto;padding:0 20px;background:#f8fafc;color:#172033}.hero{padding:32px;border-radius:20px;background:linear-gradient(135deg,#ea580c,#f97316);color:#fff}h1{margin:0 0 8px}.card{margin-top:20px;padding:24px;background:#fff;border:1px solid #e2e8f0;border-radius:16px}code{color:#c2410c}</style>
</head>
<body>
<section class="hero"><p>01-406-093-203</p><h1>Laravel week-03</h1><p>Routing และ Views</p></section>
<section class="card"><h2>ข้อมูลนักศึกษา</h2><p><strong><?php echo e(config('student.full_name_th')); ?></strong></p><p><?php echo e(config('student.student_id')); ?></p><?php if(config('student.full_name_en')): ?><p><?php echo e(config('student.full_name_en')); ?></p><?php endif; ?></section>
<section class="card"><h2>งานประจำสัปดาห์</h2><p>สร้าง route แบบมี parameter และ fallback</p><p>เปิดดูรายละเอียดและตัวอย่างใน <code>course-work/</code></p></section>
</body>
</html>
<?php /**PATH H:\Project\salemood-laravel-course\students\Natcharee Uthaiwat\week-03\laravel-week-03\resources\views/course-week.blade.php ENDPATH**/ ?>