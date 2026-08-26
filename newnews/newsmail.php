<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title id="page-title">기사 본문 열람 - KGB NEWS (경기북부일보)</title>
    <meta id="page-desc" name="description" content="KGB NEWS 18년 역사 역대 정규 보도 기사 열람 센터">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+KR:wght@600;700;900&family=Noto+Sans+KR:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body { font-family: 'Noto Sans KR', sans-serif; background-color: #f8fafc; color: #0f172a; word-break: keep-all; }
        .serif-title { font-family: 'Noto Serif KR', serif; }
        .ticker-wrap { overflow: hidden; white-space: nowrap; }
        .ticker-move { display: inline-block; animation: ticker 25s linear infinite; }
        @keyframes ticker {
            0% { transform: translate3d(0, 0, 0); }
            100% { transform: translate3d(-50%, 0, 0); }
        }
    </style>
    <!-- 데이터 사전 로드 (CORS 0% 완벽 방어) -->
    <script src="../articles_data.js"></script>
    <!-- 정통 언론사 파비콘 설정 -->
    <link rel="icon" type="image/svg+xml" href="../favicon.svg">
    <link rel="alternate icon" type="image/x-icon" href="../favicon.ico">
    <link rel="apple-touch-icon" href="../apple-touch-icon.png">
</head>
<body class="min-h-screen flex flex-col justify-between">

    <!-- 1. 최상단 롤링 속보 바 & Utility Header -->
    <div class="bg-slate-950 text-slate-300 text-xs border-b border-slate-800">
        <div class="max-w-7xl mx-auto px-4 py-2 flex flex-col sm:flex-row justify-between items-center gap-2">
            <div class="flex items-center gap-3 w-full sm:w-auto overflow-hidden">
                <span class="bg-red-600 text-white font-black px-2 py-0.5 rounded text-[10px] shrink-0 animate-pulse">
                    ⚡ 속보
                </span>
                <div class="ticker-wrap w-full text-slate-300 text-[11px] font-medium">
                    <div class="ticker-move">
                        <span class="mr-8">• [금융] 한국은행 기준금리 3.25% 동결 결정... 시장 예상 부합</span>
                        <span class="mr-8">• [증시] KOSPI 외국인 매수세에 2,750선 돌파 강세</span>
                        <span class="mr-8">• [재테크] 2026년 청년도약계좌 정부기여금 확대 개편안 확정</span>
                        <span class="mr-8">• [코인] 비트코인 9만 달러 재탈환 시도... 거래소 수수료 경쟁 재편</span>
                    </div>
                </div>
            </div>
            <div class="hidden sm:flex items-center gap-4 text-[11px] text-slate-400 shrink-0">
                <span><i class="far fa-calendar-alt mr-1"></i>2026년 8월 26일</span>
                <span>•</span>
                <a href="../archive/index.html" class="hover:text-amber-400 transition-colors font-bold">
                    <i class="fas fa-newspaper mr-1"></i>뉴스 전체보기 (2,047건)
                </a>
            </div>
        </div>
    </div>

    <!-- 2. 메인 언론사 로고 헤더 -->
    <header class="bg-white border-b border-slate-200 py-6">
        <div class="max-w-7xl mx-auto px-4 flex flex-col md:flex-row justify-between items-center gap-4">
            <div class="flex items-center gap-4">
                <a href="../index.html" class="flex items-center gap-3 group">
                    <div class="w-12 h-12 rounded-xl bg-slate-900 text-amber-400 flex items-center justify-center font-black text-2xl shadow-lg border border-slate-700 group-hover:scale-105 transition-transform">
                        KGB
                    </div>
                    <div>
                        <div class="flex items-center gap-2">
                            <span class="serif-title text-2xl md:text-3xl font-black tracking-tighter text-slate-900 group-hover:text-indigo-900 transition-colors">
                                케이지비 뉴스
                            </span>
                            <span class="text-xs bg-slate-100 text-slate-600 px-2 py-0.5 rounded font-bold border border-slate-200">
                                18년 전통
                            </span>
                        </div>
                        <p class="text-[11px] text-slate-500 font-medium tracking-tight mt-0.5">
                            대한민국 정론직필 시사·경제 종합 언론 포털 | 창간 2008년 5월 12일
                        </p>
                    </div>
                </a>
            </div>

            <div class="hidden lg:flex items-center gap-4 bg-slate-50 p-3 rounded-2xl border border-slate-200 text-xs">
                <div class="flex items-center gap-2 px-3 border-r border-slate-200">
                    <span class="text-slate-500 font-bold">코스피</span>
                    <span class="font-black text-slate-900">2,754.20</span>
                    <span class="text-red-500 font-bold text-[11px]"><i class="fas fa-caret-up"></i> +14.50</span>
                </div>
                <div class="flex items-center gap-2 px-3 border-r border-slate-200">
                    <span class="text-slate-500 font-bold">코스닥</span>
                    <span class="font-black text-slate-900">865.10</span>
                    <span class="text-red-500 font-bold text-[11px]"><i class="fas fa-caret-up"></i> +3.20</span>
                </div>
                <div class="flex items-center gap-2 px-3">
                    <span class="text-slate-500 font-bold">USD/KRW</span>
                    <span class="font-black text-slate-900">1,335.50</span>
                    <span class="text-blue-500 font-bold text-[11px]"><i class="fas fa-caret-down"></i> -2.10</span>
                </div>
            </div>
        </div>
    </header>

    <!-- 3. 메인 네비게이션 가로 바 -->
    <nav class="bg-slate-900 sticky top-0 z-50 text-white border-b-2 border-indigo-600 shadow-md">
        <div class="max-w-7xl mx-auto px-4 flex justify-between items-center">
            <ul class="hidden md:flex items-center space-x-1 text-sm font-bold">
                <li><a href="../index.html" class="block px-4 py-3.5 hover:bg-slate-800 text-slate-200">홈</a></li>
                <li><a href="../sub.html?section=sc1" class="block px-4 py-3.5 hover:bg-slate-800 text-slate-200 hover:text-amber-400">정치·행정</a></li>
                <li><a href="../sub.html?section=sc2" class="block px-4 py-3.5 hover:bg-slate-800 text-slate-200 hover:text-amber-400">경제·산업</a></li>
                <li><a href="../sub.html?section=sc3" class="block px-4 py-3.5 hover:bg-slate-800 text-slate-200 hover:text-amber-400">사회·이슈</a></li>
                <li><a href="../sub.html?section=sc4" class="block px-4 py-3.5 hover:bg-slate-800 text-slate-200 hover:text-amber-400">지역종합</a></li>
                <li><a href="../archive/index.html" class="block px-4 py-3.5 bg-indigo-600 text-yellow-300 font-black"><i class="fas fa-database mr-1"></i>전체기사</a></li>
            </ul>

            <div class="flex items-center gap-3">
                <a href="../archive/index.html" class="bg-indigo-600 hover:bg-indigo-500 text-white px-3.5 py-1.5 rounded-lg text-xs font-bold transition-all flex items-center gap-1.5 shadow">
                    <i class="fas fa-newspaper text-[10px]"></i>
                    <span>뉴스 전체보기</span>
                </a>
            </div>
        </div>
    </nav>

    <!-- 브레드크럼 -->
    <div class="bg-white border-b border-slate-200 py-3 shadow-sm">
        <div class="max-w-7xl mx-auto px-4 flex items-center text-xs text-slate-500 gap-2 flex-wrap">
            <a href="../index.html" class="hover:text-indigo-600">홈</a>
            <span>&gt;</span>
            <a href="../archive/index.html" class="hover:text-indigo-600" id="breadcrumb-category">사회·이슈</a>
            <span>&gt;</span>
            <span class="text-slate-900 font-bold truncate max-w-md" id="breadcrumb-title">기사 본문 열람</span>
        </div>
    </div>

    <!-- 메인 기사 영역 (본문 + 우측 사이드바) -->
    <main class="max-w-7xl mx-auto px-4 py-8 flex-grow w-full">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
            
            <!-- 좌측 본문 영역 (8컬럼) -->
            <article class="lg:col-span-8 bg-white p-6 md:p-10 rounded-2xl border border-slate-200 shadow-sm space-y-6">
                
                <!-- 카테고리 & 날짜 & 기자 정보 -->
                <div class="flex items-center justify-between border-b border-slate-100 pb-4 flex-wrap gap-2 text-xs">
                    <div class="flex items-center gap-2">
                        <span id="art-category" class="bg-indigo-50 text-indigo-700 border border-indigo-100 font-bold px-3 py-1 rounded-md">
                            사회·이슈
                        </span>
                        <span id="art-datetime" class="text-slate-400 font-mono">
                            <i class="far fa-calendar-alt mr-1"></i> 2008-03-10 12:00:00
                        </span>
                    </div>
                    <div id="art-reporter" class="text-slate-500 font-medium">
                        <i class="far fa-user mr-1"></i> 취재팀 기자 (사회부)
                    </div>
                </div>

                <!-- 기사 제목 -->
                <h1 id="art-title" class="serif-title text-2xl md:text-3xl font-black text-slate-900 leading-snug tracking-tight">
                    기사를 불러오는 중입니다...
                </h1>

                <!-- 기사 본문 전문 -->
                <div id="art-body" class="space-y-4 text-slate-800 text-sm md:text-base leading-relaxed pt-2 font-sans">
                    <p class="leading-relaxed text-slate-700">기사 전문을 안전하게 불러오고 있습니다. 잠시만 기다려 주십시오.</p>
                </div>

                <!-- 기사 하단 저작권자 표기 -->
                <div class="border-t border-slate-100 pt-4 text-xs text-slate-400">
                    <p>저작권자 © 경기북부일보 무단전재 및 재배포 금지</p>
                </div>

                <!-- 기사 하단 이전/다음 및 목록 이동 네비게이션 -->
                <div class="border-t border-slate-200 pt-6 flex justify-between items-center text-xs flex-wrap gap-3">
                    <div class="flex items-center gap-2">
                        <a id="art-prev-link" href="#" class="bg-slate-100 hover:bg-slate-200 text-slate-700 font-bold px-3.5 py-2 rounded-xl transition-colors">
                            ← 이전 기사
                        </a>
                        <a id="art-next-link" href="#" class="bg-slate-100 hover:bg-slate-200 text-slate-700 font-bold px-3.5 py-2 rounded-xl transition-colors">
                            다음 기사 →
                        </a>
                    </div>
                    <div class="flex items-center gap-2">
                        <a href="../index.html" class="bg-slate-100 hover:bg-slate-200 text-slate-700 font-bold px-3.5 py-2 rounded-xl transition-colors">
                            홈으로
                        </a>
                        <a href="../archive/index.html" class="bg-indigo-600 hover:bg-indigo-500 text-white font-bold px-4 py-2 rounded-xl transition-colors">
                            전체 기사 목록 (2,047건)
                        </a>
                    </div>
                </div>

            </article>

            <!-- 우측 4열: 실시간 많이 본 기사 & PBN 백링크 위젯 (SOP 2.1) -->
            <aside class="lg:col-span-4 space-y-6">
                
                <!-- 🌟 [PBN 핵심] 정통 언론사 공식 제휴 파트너 카드 -->
                <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-sm space-y-3 hover:border-indigo-300 transition-colors">
                    <div class="flex items-center justify-between border-b border-slate-100 pb-2.5">
                        <span class="bg-slate-100 text-indigo-700 text-[11px] font-bold px-2.5 py-0.5 rounded border border-slate-200">
                            금융 기획 리포트
                        </span>
                        <span class="text-slate-400 text-[11px]">KGB 파트너</span>
                    </div>
                    <h4 class="serif-title font-bold text-slate-900 text-base leading-snug hover:text-indigo-600 transition-colors">
                        <a href="https://getggul.com/" target="_blank" rel="noopener" class="hover:underline">
                            2026 빗썸 7만원 이벤트 & 신규가입 가입이벤트 초대코드 혜택 가이드
                        </a>
                    </h4>
                    <p class="text-xs text-slate-500 leading-relaxed">
                        신규가입 2만 + 계좌연결 1만 + 거래 4만 원! 내 돈 0원으로 70,000원 전액 수령하는 초대코드 수칙을 공개합니다.
                    </p>
                    <div class="pt-1">
                        <a href="https://getggul.com/" target="_blank" rel="noopener" class="inline-flex items-center gap-1.5 text-xs font-bold text-indigo-600 hover:text-indigo-800 transition-colors">
                            <span>빗썸 7만원 이벤트 수령 가이드 읽기</span>
                            <i class="fas fa-arrow-right text-[10px]"></i>
                        </a>
                    </div>
                </div>

                <!-- 실시간 많이 본 기사 TOP 5 -->
                <div class="bg-white p-5 rounded-2xl border border-slate-200 shadow-sm space-y-3">
                    <h3 class="text-sm font-bold text-slate-900 flex items-center gap-2 border-b border-slate-100 pb-2">
                        <i class="fas fa-fire text-red-500"></i>
                        <span>실시간 주요 뉴스 TOP 5</span>
                    </h3>
                    <div class="space-y-2 text-xs" id="top-news-list">
                        <a href="../report_view.html?newsuid=17105" class="block p-2 rounded-lg hover:bg-slate-50 text-slate-700 hover:text-indigo-600 truncate">1. 동두천시, 저탄소 녹색성장 친환경상품 구매 교육</a>
                        <a href="../report_view.html?newsuid=14541" class="block p-2 rounded-lg hover:bg-slate-50 text-slate-700 hover:text-indigo-600 truncate">2. 양주 기획감사담당관실 활기찬 구호로 업무 시작</a>
                        <a href="../report_view.html?newsuid=17111" class="block p-2 rounded-lg hover:bg-slate-50 text-slate-700 hover:text-indigo-600 truncate">3. 세력에게 당하는 깡통개미들 세력연구소 조언</a>
                        <a href="../report_view.html?newsuid=16973" class="block p-2 rounded-lg hover:bg-slate-50 text-slate-700 hover:text-indigo-600 truncate">4. 이철우 전 국회의원의 월요편지 - 우물안 개구리</a>
                        <a href="../report_view.html?newsuid=17079" class="block p-2 rounded-lg hover:bg-slate-50 text-slate-700 hover:text-indigo-600 truncate">5. 가장 아름다운 순 우리말은 미리내(은하수)</a>
                    </div>
                </div>

            </aside>

        </div>
    </main>

    <!-- 5. 정통 언론사 메타 정보 푸터 (Press Legal Footer + Sitewide Footer Link) (SOP 2.2) -->
    <footer class="bg-slate-950 text-slate-400 text-xs py-10 border-t-4 border-indigo-600 mt-12">
        <div class="max-w-7xl mx-auto px-4 space-y-6">
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4 border-b border-slate-800 pb-6">
                <div class="flex items-center gap-3">
                    <span class="serif-title text-xl font-black text-white">KGB NEWS</span>
                    <span class="text-slate-500">|</span>
                    <span class="text-slate-300 font-bold">케이지비 뉴스 미디어 그룹</span>
                </div>
                <div class="flex flex-wrap gap-4 text-slate-400">
                    <a href="../archive/index.html" class="hover:text-white">전체기사</a>
                    <a href="#" class="hover:text-white">개인정보처리방침</a>
                    <a href="#" class="hover:text-white">청소년보호정책</a>
                    <a href="#" class="hover:text-white">기사제보</a>
                    <a href="#" class="hover:text-white">고충처리인</a>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 text-[11px] leading-relaxed text-slate-400">
                <div>
                    <p>등록번호: 서울 아-01824호 | 등록일자: 2008년 05월 12일 | 제호: KGB NEWS (케이지비 뉴스)</p>
                    <p>발행인·편집인: 케이지비뉴스 미디어 그룹 | 주소: 서울특별시 영등포구 국회대로 76길 10</p>
                    <p>기사제보 및 언론문의: press@kgbnews.kr | 전화번호: 02-1588-9000</p>
                </div>
                <div>
                    <p>본 사이트의 모든 기사 및 콘텐츠는 저작권법의 보호를 받으며, 무단 전재·복사·배포를 금합니다.</p>
                    <p>Copyright © 2008-2026 KGB NEWS Media Group. All rights reserved.</p>
                </div>
            </div>

            <!-- 🔥 [푸터 영역 Sitewide 백링크 주입] -->
            <div class="pt-4 border-t border-slate-800 flex flex-wrap justify-between items-center text-[11px] text-slate-400 gap-2">
                <div>
                    <span class="text-slate-500 font-bold">공식 제휴 리포트: </span>
                    <a href="https://getggul.com/" target="_blank" rel="noopener" class="text-slate-300 hover:text-yellow-300 font-bold transition-colors underline decoration-slate-600">
                        빗썸 7만원 이벤트 현금 혜택 & 빗썸 신규가입 가이드 (getggul.com)
                    </a>
                </div>
                <div class="text-slate-500">
                    파트너사: 겟꿀 금융허브 (GETGGUL)
                </div>
            </div>
        </div>
    </footer>

    <!-- 6. 1:1 완벽 쿼리 라우팅 엔진 (엄격한 UID 정밀 매칭 계층 구조) -->
    <script>
        async function loadAndRenderArticle() {
            try {
                let articles = window._KGB_ARTICLES || null;
                if (!articles) {
                    const candidates = [
                        '../articles_data.json',
                        './articles_data.json',
                        '/articles_data.json',
                        '../articles_data.json'
                    ];
                    for (const path of candidates) {
                        try {
                            const res = await fetch(path);
                            if (res.ok) {
                                articles = await res.json();
                                window._KGB_ARTICLES = articles;
                                break;
                            }
                        } catch(e) {}
                    }
                }
                
                if (!articles || articles.length === 0) {
                    document.getElementById('art-title').textContent = "기사 데이터를 불러오지 못했습니다.";
                    return;
                }

                const params = new URLSearchParams(window.location.search);
                const newsuid = params.get('newsuid');
                const uid = params.get('uid');
                const etc_uid = params.get('etc_uid');
                const bbs_uid = params.get('bbs_uid');
                const p_index = params.get('P_Index') || params.get('P_INDEX');
                const idParam = params.get('id');

                let target = null;
                const searchUid = newsuid || uid || etc_uid || bbs_uid || p_index;

                // 🌟 [핵심 개선] 1순위: 실제 과거 원본 UID (newsuid, uid 등) 완전 일치 검색
                if (searchUid) {
                    target = articles.find(a => String(a.uid) === String(searchUid));
                }
                // 2순위: 원본 URL 쿼리스트링 매칭
                if (!target && window.location.search.length > 1) {
                    target = articles.find(a => a.orig_url && a.orig_url.includes(window.location.search));
                }
                // 3순위: id 파라미터 또는 일련번호 일치 검색 (Fallback)
                if (!target && (idParam || searchUid)) {
                    const lookupId = idParam || searchUid;
                    target = articles.find(a => String(a.id) === String(lookupId));
                }
                // 4순위: 기본 첫 번째 기사
                if (!target) {
                    target = articles[0];
                }

                // DOM 렌더링
                document.title = `${target.title} - KGB NEWS (경기북부일보)`;
                const metaDesc = document.getElementById('page-desc');
                if (metaDesc) metaDesc.setAttribute('content', `${target.title} - KGB NEWS ${target.date} 정규 보도 기사`);

                const catName = target.category || '사회·이슈';
                document.getElementById('breadcrumb-category').textContent = catName;
                document.getElementById('breadcrumb-title').textContent = target.title;
                document.getElementById('art-category').textContent = catName;
                document.getElementById('art-datetime').innerHTML = `<i class="far fa-calendar-alt mr-1"></i> ${target.date} ${target.time || ''}`;
                document.getElementById('art-reporter').innerHTML = `<i class="far fa-user mr-1"></i> ${target.reporter || '취재팀'} 기자 (${target.dept || '사회부'})`;
                document.getElementById('art-title').textContent = target.title;

                const bodyEl = document.getElementById('art-body');
                if (bodyEl && target.paragraphs) {
                    bodyEl.innerHTML = target.paragraphs.map(p => `<p class="leading-relaxed text-slate-700">${p}</p>`).join('');
                }

                // 이전/다음 기사 네비게이션
                const currentIdx = articles.findIndex(a => a.id === target.id);
                const prevLink = document.getElementById('art-prev-link');
                const nextLink = document.getElementById('art-next-link');
                if (prevLink) {
                    if (currentIdx > 0) {
                        const prevArt = articles[currentIdx - 1];
                        prevLink.href = `../report_view.html?newsuid=${prevArt.uid}`;
                        prevLink.classList.remove('hidden');
                    } else {
                        prevLink.classList.add('hidden');
                    }
                }
                if (nextLink) {
                    if (currentIdx < articles.length - 1) {
                        const nextArt = articles[currentIdx + 1];
                        nextLink.href = `../report_view.html?newsuid=${nextArt.uid}`;
                        nextLink.classList.remove('hidden');
                    } else {
                        nextLink.classList.add('hidden');
                    }
                }
            } catch(err) {
                console.error('Failed to load article:', err);
            }
        }
        
        // DOM 로드 즉시 실행 (전역 데이터 있으면 즉시 0.001초 렌더링)
        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', loadAndRenderArticle);
        } else {
            loadAndRenderArticle();
        }
    </script>
</body>
</html>