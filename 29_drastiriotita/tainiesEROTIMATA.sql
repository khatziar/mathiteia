-- 6. Βρες τιτλο, διάρκεια σε χρονολογική φθίνουσα σειρά
SELECT titlos, diarkeia, etos
FROM tainies
ORDER BY etos DESC;

-- 7. Εμαφανίστε τίτλους που ξεκινούν από Τ
select titlos 
from tainies 
where titlos like "T%";


-- 8. Εμφανίστε όλα τα στοιχεία των τρισδιάστατων ταινιών με διάρκεια πάνω από 100
SELECT * FROM tainies
WHERE (trisd = 1) and (diarkeia > 100);


-- extra: Αυξήστε για κάθε εγγραφή την διάρκεια κατά 10
update tainies
set diarkeia = diarkeia + 10
where 1;
