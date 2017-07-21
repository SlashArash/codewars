;; https://www.codewars.com/kata/parse-nice-int-from-char-problem/train/clojure

(ns clojure.girl-age)

(defn how-old
  [her-old]
  (Integer/parseInt (re-find #"\d+" her-old))
)