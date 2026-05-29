document.getElementById('contactForm').addEventListener('submit', function(event) {
  // 各入力項目の値を取得
  const name = document.getElementById('name').value.trim();
  const companyName = document.getElementById('companyName').value.trim();
  const email = document.getElementById('email').value.trim();
  const age = document.getElementById('age').value.trim();
  const massage = document.getElementById('massage').value.trim();


  let emptyFields = [];
  if (!name) emptyFields.push("お名前");
  if (!companyName) emptyFields.push("会社名");
  if (!email) emptyFields.push("メールアドレス");
  if (!age) emptyFields.push("年齢");
  if (!massage) emptyFields.push("お問い合わせ内容");

if (emptyFields.length > 0) {
    event.preventDefault(); // 送信をキャンセル
    alert("以下の項目が未入力です：\n・" + emptyFields.join("\n・"));
    return; // 
  }

  const result = confirm("この内容で送信してもよろしいですか？");

  if (!result) {
    event.preventDefault(); // 送信をキャンセル
    alert("送信をキャンセルしました。"); 
  }
});



document.addEventListener('DOMContentLoaded', function () {
    const button = document.getElementById('fun-button');
    const footer = document.getElementById('site-footer');
    const colorClasses = ['footer-blue', 'footer-red', 'footer-yellow',footer-'gray'];
    let colorIndex = -1;

    if (button && footer) {
        button.addEventListener('click', function () {
            footer.classList.remove(...colorClasses);
            colorIndex = (colorIndex + 1) % colorClasses.length;
            footer.classList.add(colorClasses[colorIndex]);
        });
    }
});
