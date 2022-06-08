<?php

// Pre-saved questions for "ExtraQuiz"

//Each array contains: {question(in html)} + {correct answer} + {question name} in cells [i][0], [i][1] and [i][2] respectively


$easy_questions = array(
					array('<p>
Ποιος από τους παρακάτω αλγόριθμους ταξινόμησης έχει τη χαμηλότερη πολυπλοκότητα στη χειρότερη περίπτωση;
</p>

<p>
<input type="radio" name="question1" id="question1" value="1a">Merge Sort<br>

<input type="radio" name="question1" id="question1" value="1b">Bubble Sort<br>

<input type="radio" name="question1" id="question1" value="1c">Quick Sort<br>

<input type="radio" name="question1" id="question1" value="1d">Selection Sort

</p>', "1a","question1"), 
					array('<p>
Ποια είναι η καλύτερη χρονική πολυπλοκότητα του αλγόριθμου ταξινόμησης bubble sort;
</p>

<p>
<input type="radio" name="question2" id="question2" value="2a">N^2<br>

<input type="radio" name="question2" id="question2" value="2b">NlogN<br>

<input type="radio" name="question2" id="question2" value="2c">N<br>

<input type="radio" name="question2" id="question2" value="2d">N(logN)^2

</p>', "2c","question2"),
					array('<p>
Σε έναν διαγωνισμό, παρατηρούνται τέσσερις διαφορετικές λειτουργίες. Όλες οι λειτουργίες χρησιμοποιούν ένα μόνο for βρόχο και εντός του βρόχου εκτελείται το 
ίδιο σύνολο δηλώσεων. Εξετάστε τους ακόλουθους βρόχους:
A) for(i = 0; i < n; i++)
 
B) for(i = 0; i < n; i += 2)
 
C) for(i = 1; i < n; i *= 2)
 
D) for(i = n; i > -1; i /= 2)

Εάν n είναι το μέγεθος της εισόδου (θετικό), ποια λειτουργία είναι η πιο αποτελεσματική (εάν η εργασία που πρέπει να εκτελεστεί δεν αποτελεί πρόβλημα);
</p>
<p>
<input type="radio" name="question3" id="question3" value="3a">A<br>

<input type="radio" name="question3" id="question3" value="3b">B<br>

<input type="radio" name="question3" id="question3" value="3c">C<br>

<input type="radio" name="question3" id="question3" value="3d">D
</p>', "3c","question3"),
					array('<p>
Μια τεχνική ταξινόμησης ονομάζεται σταθερή εάν:
</p>

<p>
<input type="radio" name="question4" id="question4" value="4a">Χρειάζεται χρόνος O (n*logn)<br>

<input type="radio" name="question4" id="question4" value="4b">Διατηρεί τη σχετική σειρά εμφάνισης μη διακριτών στοιχείων<br>

<input type="radio" name="question4" id="question4" value="4c">Χρησιμοποιεί διαίρε και βασίλευε παράδειγμα<br>

<input type="radio" name="question4" id="question4" value="4d">Παίρνει O(n) χώρο
</p>', "4b","question4"),
					array('<p>
Ας υποθέσουμε ότι θέλουμε να τακτοποιήσουμε τους αριθμούς i που είναι αποθηκευμένοι 
σε έναν πίνακα έτσι ώστε όλες οι αρνητικές τιμές να εμφανίζονται πριν από όλες τις 
θετικές. Ο ελάχιστος αριθμός ανταλλαγών που απαιτείται στη χειρότερη περίπτωση είναι:
</p>

<p>
<input type="radio" name="question5" id="question5" value="5a">n-1<br>

<input type="radio" name="question5" id="question5" value="5b">n<br>

<input type="radio" name="question5" id="question5" value="5c">n+1<br>

<input type="radio" name="question5" id="question5" value="5d">Καμία από τις παραπάνω
</p>', "5d","question5"),
					array('<p>
Ο ελάχιστος αριθμός κινήσεων εγγραφής που απαιτείται για τη συγχώνευση πέντε 
αρχείων A (με 10 εγγραφές), B (με 20 εγγραφές), C (με 15 εγγραφές), D (με 5 εγγραφές) 
και E (με 25 εγγραφές) είναι:
</p>

<p>
<input type="radio" name="question6" id="question6" value="6a">165<br>

<input type="radio" name="question6" id="question6" value="6b">90<br>

<input type="radio" name="question6" id="question6" value="6c">75<br>

<input type="radio" name="question6" id="question6" value="6d">65
</p>', "6a","question6"),
					array('<p>
Μια λίστα με συμβολοσειρά n, κάθε μήκους n, ταξινομείται σε λεξικογραφική σειρά χρησιμοποιώντας τον αλγόριθμο merge-sort.
Ο χειρότερος χρόνος λειτουργίας αυτού του υπολογισμού είναι
</p>

<p>
<input type="radio" name="question7" id="question7" value="7a">O (n log n)<br>

<input type="radio" name="question7" id="question7" value="7b">O (n^2 log n)<br>

<input type="radio" name="question7" id="question7" value="7c">O (n^2 + log n)<br>

<input type="radio" name="question7" id="question7" value="7d">O (n^2)</p>',"7b","question7"),
					array('<p>
Εξετάστε την ακόλουθη συνάρτηση
 int unknown(int n) {
    int i, j, k = 0;
    for (i  = n/2; i <= n; i++)
        for (j = 2; j <= n; j = j * 2)
            k = k + n/2;
    return k;
 }
What is the returned value of the above function? (GATE CS 2013)
(A) Θ(n^2)
(B) Θ(n^2Logn)
(C) Θ(n^3)
(D) Θ(n^3Logn) 
</p>

<p>
<input type="radio" name="question8" id="question8" value="8a">Α<br>

<input type="radio" name="question8" id="question8" value="8b">Β<br>

<input type="radio" name="question8" id="question8" value="8c">C<br>

<input type="radio" name="question_8" id="question8" value="8d">D</p>',"8b", "question8"),
					array('<p>
Ποια είναι η καλύτερη χρονική πολυπλοκότητα της bubble sort;
</p>

<p>
<input type="radio" name="question9" id="question9" value="9a">N^2<br>

<input type="radio" name="question9" id="question9" value="9b">NlogN<br>

<input type="radio" name="question9" id="question9" value="9c">N<br>

<input type="radio" name="question9" id="question9" value="9d">N(logN)^2
</p>',"9c", "question9")
					);

$medium_questions = array(
					array('<p>
Τι είναι η επανάληψη στη χειρότερη περίπτωση του QuickSort και ποια είναι η 
χρονική πολυπλοκότητα στην χειρότερη περίπτωση;</p>
	
<p><input type="radio" name="question11" id="question11" value="11a">Η επανάληψη είναι T(n) = T(n-2) +O(n) και η πολυπλοκότητα του χρόνου είναι O(n^2)<br>

<input type="radio" name="question11" id="question11" value="11b">Η επανάληψη είναι T(n) = T(n-1) + O(n) και η πολυπλοκότητα του χρόνου είναι O(n^2)<br>

<input type="radio" name="question11" id="question11" value="11c">Η επανάληψη είναι T(n) = 2T(n / 2) + O(n) και η πολυπλοκότητα του χρόνου είναι O(nlogn)<br>

<input type="radio" name="question11" id="question11" value="11d">Η επανάληψη είναι T(n) = T(n / 10) + T(9n / 10) + O(n) και η πολυπλοκότητα του χρόνου <br>
είναι O(nlogn)
</p>',"11b","question11"),
					array('<p>
Εξετάστε την ακόλουθη συνάρτηση C.

int fun1 (int n)
{
   int i, j, k, p, q = 0;
   for (i = 1; i<n; ++i)
   {
      p = 0;
      for (j = n; j > 1; j = j/2)
         ++p;
      for (k = 1; k < p; k = k*2)
         ++q;
   }
   return q;
}

Ποιο από τα παρακάτω προσεγγίζει περισσότερο την τιμή επιστροφής της συνάρτησης fun1;</p>
<p>
<input type="radio" name="question12" id="question12" value="12a">n^3<br>

<input type="radio" name="question12" id="question12" value="12b">n*(logn)^2<br>

<input type="radio" name="question12" id="question12" value="12c">n*logn<br>

<input type="radio" name="question12" id="question12" value="12d">n*log*(logn)

</p>',"12d","question12"),
					array('<p>
Μια λίστα με συμβολοσειρά n, κάθε μήκους n, ταξινομείται σε λεξικογραφική 
σειρά χρησιμοποιώντας τον αλγόριθμο συγχώνευσης. Ο χειρότερος χρόνος λειτουργίας αυτού του υπολογισμού είναι:
</p>

<p>
<input type="radio" name="question13" id="question13" value="13a">O(nlogn)<br>

<input type="radio" name="question13" id="question13" value="13b">O((n^2)*logn)<br>

<input type="radio" name="question13" id="question13" value="13c">O((n^2) + logn)<br>

<input type="radio" name="question13" id="question13" value="13d">O(n^2)
</p>',"13b","question13"),
					array('<p>
Ποια είναι η χρονική πολυπλοκότητα του αλγορίθμου Floyd – Warshall για τον υπολογισμό της μικρότερης διαδρομής όλων των ζευγών σε ένα γράφημα με n κορυφές;
</p>

<p>
<input type="radio" name="question14" id="question14" value="14a">O(n^2logn)<br>

<input type="radio" name="question14" id="question14" value="14b">Theta(n^2logn)<br>

<input type="radio" name="question14" id="question14" value="14c">Theta(n^4)<br>

<input type="radio" name="question14" id="question14" value="14d">Theta(n^3)
</p>',"14d","question14"),
					array('<p>
Τακτοποιήστε τις ακόλουθες λειτουργίες με αυξανόμενη ασυμπτωτική σειρά:
A. n1/3
B. en
C. n7/4
D. n log9n
E. 1.0000001n
</p>

<p>
<input type="radio" name="question15" id="question15" value="15a">A, D, C, E, B<br>

<input type="radio" name="question15" id="question15" value="15b">D, A, C, E, B<br>

<input type="radio" name="question15" id="question15" value="15c">A, C, D, E, B<br>

<input type="radio" name="question15" id="question15" value="15d">A, C, D, B, E

</p>',"15a","question15"),
					array('<p>
Εξετάστε τις ακόλουθες τρεις αξιώσεις
1) (n + k)m = Θ(nm), where k and m are constants
2) 2n + 1 = O(2n)
3) 22n + 1 = O(2n)
Ποιο απο τα παρακάτω είναι σωστά:
</p>

<p>
<input type="radio" name="question16" id="question16" value="16a">1 και 2<br>

<input type="radio" name="question16" id="question16" value="16b">1 και 3<br>

<input type="radio" name="question16" id="question16" value="16c">2 και 3<br>

<input type="radio" name="question16" id="question16" value="16d">1,2 και 3

</p>',"16a","question16"),
					array('<p>
Σε μια παραλλαγή a1 ..... ένα από n διακριτούς ακέραιους αριθμούς, μια αντιστροφή είναι ένα ζεύγος (ai, aj) έτσι ώστε να i<j και ai> aj. 
Ποια θα ήταν η χειρότερη περίπτωση πολυπλοκότητας του αλγορίθμου Insertion Sort, εάν οι είσοδοι περιορίζονται σε παραλλαγές του 1 ..... n με το πολύ n αντιστροφές;
</p>

<p>
<input type="radio" name="question17" id="question17" value="17a">Θ (n^2)<br>

<input type="radio" name="question17" id="question17" value="17b">Θ (n log n)<br>

<input type="radio" name="question17" id="question17" value="17c">Θ (n^(1.5))<br>

<input type="radio" name="question17" id="question17" value="17d">Θ (n)

</p>',"17b","question17"),
					array('<p>
Η τυχαιοποιημένη quicksort  είναι μια επέκταση της quicksort όπου ο άξονας επιλέγεται τυχαία. 
Ποια είναι η χειρότερη πολυπλοκότητα ταξινόμησης n αριθμών χρησιμοποιώντας τυχαιοποιημένη quicksort;
</p>

<p>
<input type="radio" name="question18" id="question18" value="18a">O(n)<br>

<input type="radio" name="question18" id="question18" value="18b">O(n Log n)<br>

<input type="radio" name="question18" id="question18" value="18c">O(n2)<br>

<input type="radio" name="question18" id="question18" value="18d">O(n!)
</p>',"18c","question18"),
					array('<p>
Ποιο από τα παρακάτω είναι η εξίσωση επανάληψης για τη χειρότερη περίπτωση πολυπλοκότητας του
αλγορίθμου Quicksort για ταξινόμηση αριθμών n (≥ 2); Στις εξισώσεις επανάληψης που δίνονται στις παρακάτω επιλογές, το c είναι μια σταθερά.
</p>

<p>
<input type="radio" name="question19" id="question19" value="19a">T(n) = 2T (n/2) + cn<br>

<input type="radio" name="question19" id="question19" value="19b">T(n) = T(n – 1) + T(0) + cn<br>

<input type="radio" name="question19" id="question19" value="19c">T(n) = 2T (n – 2) + cn<br>

<input type="radio" name="question19" id="question19" value="19d">T(n) = T(n/2) + cn
</p>',"19b","question19"),
					array('<p>
Ποια τιμή θα επέστρεφε η ακόλουθη συνάρτηση για την είσοδο x = 95;
function fun (x:integer):integer;
Begin
  If x >100 then fun = x-10
  Else fun = fun(fun( x+11))
End;
</p>

<p>
<input type="radio" name="question20" id="question20" value="20a">89<br>

<input type="radio" name="question20" id="question20" value="20b">90<br>

<input type="radio" name="question20" id="question20" value="20c">91<br>

<input type="radio" name="question20" id="question20" value="20d">92
</p>',"20b","question20"),
					);

$hard_questions = array(
					array('<p>
Δίνεται ένας μη ταξινομημένος πίνακας. Ο πίνακας έχει την ιδιότητα ότι κάθε στοιχείο 
του βρίσκεται το πολύ k απόσταση από τη θέση του σε ταξινομημένη συστοιχία , όπου το k
είναι θετικός ακέραιος μικρότερος από το μέγεθος του πίνακα. Ποιος αλγόριθμος ταξινόμησης
μπορεί εύκολα να τροποποιηθεί για την ταξινόμηση αυτού του πίνακα και ποια είναι η αποκτηθείσα πολυπλοκότητα χρόνου;</p>

<p>
<input type="radio" name="question21" id="question21" value="21a">Ταξινόμηση εισαγωγής με πολυπλοκότητα χρόνου O (kn)<br>

<input type="radio" name="question21" id="question21" value="21b">Ταξινόμηση σωρού με πολυπλοκότητα χρόνου O (nlogk)<br>

<input type="radio" name="question21" id="question21" value="21c">Γρήγορη ταξινόμηση με πολυπλοκότητα χρόνου O (klogk)<br>

<input type="radio" name="question21" id="question21" value="21d">Συγχώνευση ταξινόμησης με πολυπλοκότητα χρόνου O (klogk)
</p>',"21b","question21"),
					array('<p>
Εξετάστε το ακόλουθο πρόγραμμα που επιχειρεί να εντοπίσει ένα στοιχείο x σε έναν 
ταξινομημένο πίνακα a[] χρησιμοποιώντας δυαδική αναζήτηση. Ας υποθέσουμε ότι Ν> 1 . Το 
πρόγραμμα είναι εσφαλμένο. Υπό ποιες συνθήκες αποτυγχάνει το πρόγραμμα;

var i,j,k: integer;  x: integer;
    a: array; [1....N] of integer;
begin	i:= 1; j:= N;
repeat	
    k:(i+j) div 2;
    if a[k] < x then i:= k 
    else j:= k 
until (a[k] = x) or (i >= j);
    
if (a[k] = x) then
    writeln ("x is in the array")
else
    writeln ("x is not in the array")
end;
</p>

<p>
<input type="radio" name="question22" id="question22" value="22a">x είναι το τελευταίο στοιχείο του πίνακα a[]<br>

<input type="radio" name="question22" id="question22" value="22b">Το x είναι μεγαλύτερο από όλα τα στοιχεία του πίνακα a[]<br>

<input type="radio" name="question22" id="question22" value="22c">Και τα δυο από τα παραπανω<br>

<input type="radio" name="question22" id="question22" value="22d">Το x είναι μικρότερο από το τελευταίο στοιχείο του πίνακα a[]
</p>',"22c","question22"),
					array('<p>
Εξετάστε το πρόγραμμα
void function(int n) {
int i, j, count=0;
for (i=n/2; i <= n; i++)
for (j = 1; j <= n; j = j*2)
count++;}
Η πολυπλοκότητα του προγράμματος είναι:
</p>

<p>
<input type="radio" name="question23" id="question23" value="23a">O(logn)<br>

<input type="radio" name="question23" id="question23" value="23b">Ο(n^2)<br>

<input type="radio" name="question23" id="question23" value="23c">O((n^2)*logn)<br>

<input type="radio" name="question23" id="question23" value="23d">O(n*logn)
</p>',"23d","question23"),
					array('<p>
Εξετάστε τις ακόλουθες δύο συναρτήσεις. Ποιες είναι οι χρονικές πολυπλοκότητες των συναρτήσεων;

int fun1(int n)
{
    if (n <= 1) return n;
    return 2*fun1(n-1);
}

int fun2(int n)
{
    if (n <= 1) return n;
    return fun2(n-1) + fun2(n-1);
}
</p>

<p>
<input type="radio" name="question24" id="question24" value="24a">O(2^n) για fun1() και fun2()<br>

<input type="radio" name="question24" id="question24" value="24b">O(n) για fun1() και O(2^n) για fun2()<br>

<input type="radio" name="question24" id="question24" value="24c">O(2^n) για fun1() και O(n) για fun2()<br>

<input type="radio" name="question24" id="question24" value="24d">O(n) για fun1() και fun2()

</p>',"24b","question24"),
					array('<p>
Σου δίνεται το παρακάτω κομμάτι κώδικα:
int f (int x)
{
      if (x < 1)  return 1;
      else return (f(x-1) + g(x))
}

int g (int x)
{
      if (x < 2) return 2;
      else return (f(x-1) + g(x/2));
}
Από τις παρακάτω επιλογές, ποια περιγράφει καλύτερα την ανάπτυξη της f (x) ως συνάρτηση του x;
</p>

<p>
<input type="radio" name="question25" id="question25" value="25a">Γραμμική<br>

<input type="radio" name="question25" id="question25" value="25b">Εκθετική<br>

<input type="radio" name="question25" id="question25" value="25c">Τετραγωνική<br>

<input type="radio" name="question25" id="question25" value="25d">Κυβική
</p>',"25b","question25"),
					array('<p>
Είναι γνωστή η χρονική πολυπλοκότητα του υπολογισμού του μεταβατικού κλεισίματος της δυαδικής σχέσης σε ένα σύνολο στοιχείων n</p>

<p>
<input type="radio" name="question26" id="question26" value="26a">O(n)<br>

<input type="radio" name="question26" id="question26" value="26b">O(nlogn)<br>

<input type="radio" name="question26" id="question26" value="26c">O(n^(3/2))<br>

<input type="radio" name="question26" id="question26" value="26d">O(n^3)
</p>',"26d","question26"),
					array('<p>
Σε ένα ισορροπημένο δέντρο δυαδικής αναζήτησης με στοιχεία n, η χειρότερη πολυπλοκότητα του χρόνου αναφοράς όλων των στοιχείων στο εύρος [a, b] είναι Θ(log(n)+k),
αν υποθέσουμε ότι ο αριθμός των στοιχείων που αναφέρονται είναι k.</p>

<!--
Σωστό: 27a
Γιατί είναι σωστό,
- Χρόνος πολυπλοκότητας για να ελέγξετε αν το στοιχείο «a» σε μια δεδομένη ισορροπημένη δυαδική search tree = O(log n)
- Χρόνος πολυπλοκότητας για να ελέγξετε αν το στοιχείο «a» σε μια δεδομένη ισορροπημένη δυαδική search tree = O(log n)
- Τώρα, η πολυπλοκότητα του χρόνου για να διασχίσουμε όλα τα στοιχεία στην περιοχή [a, b], αυτά τα στοιχεία θα ταξινομηθούν inoder = θ (k)

Επομένως, η συνολική πολυπλοκότητα του χρόνου θα είναι, 
= Θ(log(n)) + Θ(log(n)) + Θ(k)
= Θ(2(log(n))+k)
= Θ(log(n)+k) 
-->
<p>
<input type="radio" name="question27" id="question27" value="27a">A. Σωστό<br>

<input type="radio" name="question27" id="question27" value="27b">B. Λάθος

</p>',"27a","question27"),
					array('<p>
Ας υποθέσουμε ότι οι Α και Β είναι μη μηδενικοί θετικοί ακέραιοι. 
Το ακόλουθο τμήμα κώδικα, 
while (A! = B) {
   If (A> B) A - = B;
      else B - = A; 
} 
cout << Α; // εκτύπωση την τιμη του Α
</p>

<!--
Σωστό: h2_a
Γιατί είναι σωστό,
- Χρόνος πολυπλοκότητας για να ελέγξετε αν το στοιχείο «a» σε μια δεδομένη ισορροπημένη δυαδική search tree = O(log n)
- Χρόνος πολυπλοκότητας για να ελέγξετε αν το στοιχείο «a» σε μια δεδομένη ισορροπημένη δυαδική search tree = O(log n)
- Τώρα, η πολυπλοκότητα του χρόνου για να διασχίσουμε όλα τα στοιχεία στην περιοχή [a, b], αυτά τα στοιχεία θα ταξινομηθούν inoder = θ (k)

Επομένως, η συνολική πολυπλοκότητα του χρόνου θα είναι, 
= Θ(log(n)) + Θ(log(n)) + Θ(k)
= Θ(2(log(n))+k)
= Θ(log(n)+k) 
-->
<p>
<input type="radio" name="question28" id="question28" value="28a">A. Σωστό<br>

<input type="radio" name="question28" id="question28" value="28b">B. Λάθος

</p>',"28a","question28"),
					array('<p>
Η εξίσωση υποτροπής:
T(1) = 1
T(n) = 2T(n - 1) + n, n ≥ 2 
</p>

<p>
<input type="radio" name="question29" id="question29" value="29a">A. 2^(n + 1) - n - 2<br>

<input type="radio" name="question29" id="question29" value="29b">B. 2^n - n<br>

<input type="radio" name="question29" id="question29" value="29c">Γ. 2^(n + 1) - 2n - 2<br>

<input type="radio" name="question29" id="question29" value="29d">Δ. 2^n + n

</p>',"29a","question29")
					);


?>