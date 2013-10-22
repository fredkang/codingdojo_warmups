#Given 2 inteigers, m and n, return the highest integer in the 
#range of 1 to the largest integer with m digits that is evently 
#divisible by n

def largestDivisible(m, n)
	largest = 0
	for i in 0..(m-1)
		largest = largest+(9*10**i)
	end

	until largest%n==0 do
		largest -= 1
	end

	return largest
end

puts largestDivisible(3, 2)
puts largestDivisible(7, 4241275)