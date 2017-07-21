;; http://www.codewars.com/kata/string-repeat/train/clojure

(ns clojure.string-repeat)

(defn repeat-str [n strng]
  (apply str(repeat n strng)))